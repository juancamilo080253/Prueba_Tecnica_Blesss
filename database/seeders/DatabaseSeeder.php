<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Size;
use App\Models\User;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'), // Cambia la contraseña según tus necesidades
        ]);

        Customer::factory(10)->create();

        Product::factory(8)->create();

        Size::factory(5)->create();

        $combinations = Product::all()
            ->crossJoin(Size::all())
            ->shuffle()
            ->take(20);

        foreach ($combinations as [$product, $size]) {
            Inventory::create([
                'product_id' => $product->id,
                'size_id' => $size->id,
                'stock' => fake()->numberBetween(0, 50),
            ]);
        }

        Order::factory(7)->create();

        OrderDetail::factory(7)->create();
    }
}
