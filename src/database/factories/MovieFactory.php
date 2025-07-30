<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'summary' => $this->faker->paragraph,
            'cover_image' => $this->faker->imageUrl(640, 480, 'movies'),
            'imdb_rating' => $this->faker->randomFloat(1, 1, 10),
            'pdf_link' => $this->faker->url,
            'author_id' => \App\Models\Author::factory(),
        ];
    }
}
