<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'comment', 'movie_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
