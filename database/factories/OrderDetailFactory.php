<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => \App\Models\Order::all()->random()->id,
            'inventory_id' => \App\Models\Inventory::all()->random()->id,
            'quantity' => fake()->numberBetween(1,10),
            'unit_price' => fake()->randomFloat(2, 1, 100),
        ];
    }
}
