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
        Product::create([
            'name' => 'Nordic Chair',
            'price' => 1200,
            'description' => 'Apple watch',
            'image' => 'https://images.unsplash.com/photo-1581539250439-c96689b516dd?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y2hhaXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500'
        ]);
        Product::create([
            'name' => 'Cushioned Chair',
            'price' => 4700,
            'description' => 'Apple Bag',
            'image' => 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hhaXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500'
        ]);
        Product::create([
            'name' => 'Black Nordic Chair',
            'price' => 1299,
            'description' => 'Apple Perfume',
            'image' => 'https://images.unsplash.com/photo-1503602642458-232111445657?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Y2hhaXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500'
        ]);
        Product::create([
            'name' => 'Potted Plant Matte',
            'price' => 699,
            'description' => 'Cold Coffee',
            'image' => 'https://images.unsplash.com/photo-1529113241001-b495badd8d44?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHRhYmxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);
    }
}