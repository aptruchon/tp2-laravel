<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visite>
 */
class VisiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "img_id" => fake()->numberBetween(1, 10),
            "date" => fake()->date(),
            "userAgent" => fake()->userAgent()
        ];
    }
}
