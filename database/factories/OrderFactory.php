<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => \App\Models\Customer::all()->random()->id,
            'status' => fake()->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            'tax_amount' => fake()->randomFloat(2, 0, 100),
            'total_amount' => fake()->randomFloat(2, 0, 1000),
        ];
    }
}
