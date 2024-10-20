<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample products
        Product::create([
            'name' => 'Apple iPhone 14',
            'description' => 'Latest model of Apple iPhone with 128GB storage.',
            'price' => 999.99,
            'stock' => 50
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S23',
            'description' => 'Flagship Samsung phone with 256GB storage.',
            'price' => 899.99,
            'stock' => 30
        ]);

        Product::create([
            'name' => 'Sony WH-1000XM4 Headphones',
            'description' => 'Noise-cancelling wireless headphones.',
            'price' => 349.99,
            'stock' => 100
        ]);

        Product::create([
            'name' => 'Dell XPS 13 Laptop',
            'description' => '13-inch laptop with Intel i7 processor and 512GB SSD.',
            'price' => 1299.99,
            'stock' => 20
        ]);

        Product::create([
            'name' => 'Nintendo Switch',
            'description' => 'Handheld gaming console with detachable Joy-Con controllers.',
            'price' => 299.99,
            'stock' => 75
        ]);
    }
}
