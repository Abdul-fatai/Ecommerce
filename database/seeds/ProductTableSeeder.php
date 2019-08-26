<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = [

            'name' => 'How to Deploy to Gh-pages',
            'image' => 'uploads/products/book2.png',
            'price' => 700,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus obcaecati'
        ];

        $p2 = [

            'name' => 'Learn to Build complete website in 30hrs',
            'image' => 'uploads/products/book.png',
            'price' => 500,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus obcaecati'
        ];

        App\Product::create($p);
        App\Product::create($p2);
    }
}
