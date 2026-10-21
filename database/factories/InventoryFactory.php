<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::all()->unique()->random()->id,
            'size_id' => \App\Models\Size::all()->unique()->random()->id,
            'stock' => fake()->numberBetween(0, 50),// Genera un número aleatorio entre 0 y 100
        ];
    }
}
