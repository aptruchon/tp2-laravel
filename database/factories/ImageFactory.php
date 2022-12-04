<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "col_id" => fake()->numberBetween(1, 10),
            "url" => fake()->url(),
            "width" => fake()->randomNumber(),
            "height" => fake()->randomNumber(),
            "slug" => fake()->slug()
        ];
    }
}
