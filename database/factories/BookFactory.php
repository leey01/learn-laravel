<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'publisher_id' => mt_rand(1,4),
            'nama' => fake()->sentence(mt_rand(1,2)),
            'author' => fake()->name(),
            'price' => fake()->randomFloat(2, 0, 100000),
            'release' => now(),
        ];
    }
}
