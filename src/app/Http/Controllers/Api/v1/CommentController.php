<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'comment' => 'required|string'
        ]);

        $data['movie_id'] = $movie->id;
        $comment = Comment::create($data);

        return response()->json([
            'message' => 'Comment created successfully', 
            'comment' => $comment
        ], 201);
    }
}
