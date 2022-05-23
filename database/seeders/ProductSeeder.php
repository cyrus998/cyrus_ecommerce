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
            'price' => 1199.99,
            'description' => 'Nordic Chair',
            'image' => 'https://images.unsplash.com/photo-1517705008128-361805f42e86?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1087'
        ]);

        
        Product::create([
            'name' => 'Cushioned Chair',
            'price' => 4700.69,
            'description' => 'Cushioned Chair',
            'image' => 'https://images.unsplash.com/photo-1577017027927-16ed7f348403?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE1fHxjaGFpcnxlbnwwfDB8MHx8&auto=format&fit=crop&w=500'
        ]);
        Product::create([
            'name' => 'Black Nordic Chair',
            'price' => 1299.99,
            'description' => 'Black Nordic Chair',
            'image' => 'https://images.unsplash.com/photo-1489269637500-aa0e75768394?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1141'
        ]);

        Product::create([
            'name' => 'Gaming Chair Brand New',
            'price' => 69420.00,
            'description' => 'Gaming Chair',
            'image' => 'https://media.discordapp.net/attachments/971130306751000636/978241075309318144/unknown.png?width=747&height=559'
        ]);
        Product::create([
            'name' => 'Potted Plant Matte',
            'price' => 699.99,
            'description' => 'Potted Plant Matte',
            'image' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8cGxhbnR8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);

        Product::create([
            'name' => 'Green Velvette Couch',
            'price' => 6999.69,
            'description' => 'Green Velvette Couch',
            'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y291Y2h8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);

        Product::create([
            'name' => 'L Shape Grey Matte Couch',
            'price' => 15999.69,
            'description' => 'Matte Couch',
            'image' => 'https://images.unsplash.com/photo-1605365070248-299a182a2ca6?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y291Y2h8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);

        Product::create([
            'name' => 'Light Fixture',
            'price' => 400.00,
            'description' => 'Light Fixture',
            'image' => 'https://images.unsplash.com/photo-1516885726422-4d4bbfce5b9e?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8bGlnaHQlMjBmdXJuaXR1cmV8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);

        Product::create([
            'name' => 'Queen Size Bed Set',
            'price' => 17699.00,
            'description' => 'Queen Size Bed',
            'image' => 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmVkfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500'
        ]);

        Product::create([
            'name' => 'Bed Side Alarm Clock',
            'price' => 349.99,
            'description' => 'Bed Side Alarm Clock',
            'image' => 'https://images.unsplash.com/photo-1628692945421-21162c93a8a6?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fHJvdW5kJTIwdGFibGV8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);
        

        Product::create([
            'name' => 'Varnished King Size Bed',
            'price' => 19699.69,
            'description' => 'Varnished King',
            'image' => 'https://images.unsplash.com/photo-1615651586679-c40132c57ba3?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTV8fGJlZHxlbnwwfDB8MHx8&auto=format&fit=crop&w=500'
        ]);



        Product::create([
            'name' => 'Wall Mounted Light',
            'price' => 699.00,
            'description' => 'Wall Mounted Light',
            'image' => 'https://images.unsplash.com/photo-1585056050604-f5cd7f56902d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGxhbXB8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);
        
        Product::create([
            'name' => 'Small Cofee Table',
            'price' => 759.00,
            'description' => 'Small Cofee Table',
            'image' => 'https://images.unsplash.com/photo-1641570167132-ddc749b9d117?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHJvdW5kJTIwdGFibGV8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500'
        ]);


       
    }
}