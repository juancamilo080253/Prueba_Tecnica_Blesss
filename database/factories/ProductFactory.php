<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'code' => fake()->unique()->bothify('SKU-######'), // Unique SKU code
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'base_price' => fake()->randomFloat(2, 1, 1000), // Random price between 1 and 1000 with 2 decimal places
            'is_active' => fake()->boolean(),

        ];
    }
}
