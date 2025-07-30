<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Movie, Genre, Tag, Author, Comment};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $genres = Genre::factory()->count(10)->create();
        $tags = Tag::factory()->count(10)->create();
        $authors = Author::factory()->count(5)->create();

        Movie::factory()
            ->count(20)
            ->create()
            ->each(function ($movie) use ($genres, $tags) {
                $movie->genres()->attach($genres->random(2));
                $movie->tags()->attach($tags->random(3));
                Comment::factory()->count(3)->create(['movie_id' => $movie->id]);
            });
    }
}
