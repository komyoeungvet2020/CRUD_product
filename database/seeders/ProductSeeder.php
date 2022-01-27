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
        Product::insert([
            [
                'name'=>'Car',
                'price'=>1000.0,
                'key'=>'car_one',
                'value'=> json_encode([
                    'size' => 'XL',
                    'color' => 'Green'
                ], JSON_THROW_ON_ERROR)
            ],
            [
                'name'=>'Moto',
                'price'=>1000.0,
                'key'=>'moto_one',
                'value'=> json_encode([
                    'size' => 'XL',
                    'color' => 'Green'
                ], JSON_THROW_ON_ERROR)
            ],
            [
                'name'=>'Computer',
                'price'=>1000.0,
                'key'=>'computer_one',
                'value'=> json_encode([
                    'size' => 'XL',
                    'color' => 'Green'
                ], JSON_THROW_ON_ERROR)
            ],
            [
                'name'=>'Phone',
                'price'=>1000.0,
                'key'=>'phone_one',
                'value'=> json_encode([
                    'size' => 'XL',
                    'color' => 'Green'
                ], JSON_THROW_ON_ERROR)
            ],
            [
                'name'=>'Book',
                'price'=>1000.0,
                'key'=>'book_one',
                'value'=> json_encode([
                    'size' => 'XL',
                    'color' => 'Green'
                ], JSON_THROW_ON_ERROR)
            ],
            [
                'name'=>'Pen',
                'price'=>1000.0,
                'key'=>'pen_one',
                'value'=> json_encode([
                    'size' => 'XL',
                    'color' => 'Green'
                ], JSON_THROW_ON_ERROR)
            ],
        ]);
    }
}
