<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ?? 10;
        $search = $request->search ?? '';

        $movies = Movie::with(['author', 'genres', 'tags'])
                    ->where('title', 'like', "%$search%")
                    ->withCount('comments')
                    ->paginate($limit);
        return response()->json([
            'message' => 'Movies fetched successfully',
            'success' => true,
            'movies' => $movies
        ], 200);
    }

    public function show(Movie $movie)
    {
        $movie->load(['author', 'genres', 'tags', 'comments']);
        $related = $this->relatedMovies($movie);
        return response()->json([
            'message' => 'Movie fetched successfully',
            'success' => true,
            'movie' => $movie,
            'related_movies' => $related
        ], 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'summary' => 'required|string',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imdb_rating' => 'required|numeric',
            'pdf_link' => 'nullable|url',
            'author_id' => 'required|exists:authors,id',
            'genres' => 'required|array',
            'genres.*' => 'exists:genres,id',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
        ]);

        if ($request->hasFile('cover_image')) {
            $filePath = $request->file('cover_image')->store('public/movies');
            $data['cover_image'] = asset('storage/movies/' . basename($filePath));
        }

        $movie = Movie::create($data);
        $movie->genres()->sync($data['genres'] ?? []);
        $movie->tags()->sync($data['tags'] ?? []);

        return response()->json([
            'message' => 'Movie created successfully',
            'success' => true,
            'movie' => $movie->load(['genres', 'tags'])
        ], 201);
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'title' => 'sometimes|string',
            'summary' => 'sometimes|string',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imdb_rating' => 'sometimes|numeric',
            'pdf_link' => 'nullable|url',
            'author_id' => 'sometimes|exists:authors,id',
            'genres' => 'array',
            'genres.*' => 'exists:genres,id',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
        ]);

        if ($request->hasFile('cover_image')) {
            if ($movie->cover_image) {
                Storage::delete('public/movies/' . basename($movie->cover_image));
            }
            $filePath = $request->file('cover_image')->store('public/movies');
            $data['cover_image'] = asset('storage/movies/' . basename($filePath));
        }


        $movie->update($data);
        if (isset($data['genres'])) $movie->genres()->sync($data['genres']);
        if (isset($data['tags'])) $movie->tags()->sync($data['tags']);

        return response()->json([
            'message' => 'Movie updated successfully',
            'success' => true,
            'movie' => $movie->load(['genres', 'tags'])
        ], 201);
    }

    public function destroy(Movie $movie)
    {
        if ($movie->cover_image) {
            Storage::delete('public/movies/' . basename($movie->cover_image));
        }

        $movie->genres()->detach();
        $movie->tags()->detach();
        $movie->comments()->delete();

        $movie->delete();
        return response()->json([
            'message' => 'Movie deleted'
        ]);
    }

    public function relatedMovies($movie)
    {
        return Movie::where('id', '!=', $movie->id)
            ->where(function ($query) use ($movie) {
                $query->where('author_id', $movie->author_id)
                    ->orWhereHas('genres', function ($q) use ($movie) {
                        $q->whereIn('genres.id', $movie->genres->pluck('id'));
                    })
                    ->orWhereHas('tags', function ($q) use ($movie) {
                        $q->whereIn('tags.id', $movie->tags->pluck('id'));
                    })
                    ->orWhereBetween('imdb_rating', [
                        $movie->imdb_rating - 1,
                        $movie->imdb_rating + 1
                    ]);
            })
            ->with(['genres', 'tags', 'author'])
            ->orderByDesc('imdb_rating')
            ->limit(7)
            ->get();
    }

}
