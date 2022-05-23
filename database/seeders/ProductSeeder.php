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
            'image' => 'https://images.unsplash.com/photo-1517705008128-361805f42e86?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1087'
        ]);
        Product::create([
            'name' => 'Cushioned Chair',
            'price' => 4700,
            'description' => 'Apple Bag',
            'image' => 'https://images.unsplash.com/photo-1577017027927-16ed7f348403?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE1fHxjaGFpcnxlbnwwfDB8MHx8&auto=format&fit=crop&w=500'
        ]);
        Product::create([
            'name' => 'Black Nordic Chair',
            'price' => 1299,
            'description' => 'Apple Perfume',
            'image' => 'https://images.unsplash.com/photo-1489269637500-aa0e75768394?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1141'
        ]);
        Product::create([
            'name' => 'Potted Plant Matte',
            'price' => 699,
            'description' => 'Cold Coffee',
            'image' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8cGxhbnR8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);
    }
}