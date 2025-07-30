<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'summary', 'cover_image', 'imdb_rating', 'pdf_link', 'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function relatedMovies()
    {
        return Movie::where('id', '!=', $this->id)
            ->where(function ($query) {
                $query->where('author_id', $this->author_id)
                    ->orWhereHas('genres', function ($q) {
                        $q->whereIn('genres.id', $this->genres->pluck('id'));
                    })
                    ->orWhereHas('tags', function ($q) {
                        $q->whereIn('tags.id', $this->tags->pluck('id'));
                    })
                    ->orWhereBetween('imdb_rating', [
                        $this->imdb_rating - 1,
                        $this->imdb_rating + 1
                    ]);
            })
            ->with(['genres', 'tags', 'author'])
            ->orderByDesc('imdb_rating')
            ->limit(7)
            ->get();
    }
}
