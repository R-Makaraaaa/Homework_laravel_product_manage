<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Laptop Acer Aspire 5', 'price' => 650.00, 'quantity' => 10]);
        Product::create(['name' => 'Samsung Galaxy S24', 'price' => 999.99, 'quantity' => 5]);
        Product::create(['name' => 'Wireless Mouse', 'price' => 25.50, 'quantity' => 50]);


    }
}
