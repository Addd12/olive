<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->word(),
            'description' => fake()->text(),
            'img_url' => fake()->image('public/storage', 640, 480, null, false),
            'quantity' => fake()->numberBetween(0, 1000),
            'price' => fake()->numberBetween(1, 100)
        ];
    }
}
