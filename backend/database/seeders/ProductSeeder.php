<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate();
        $products = [
            [
                'id' => 1,
                'title' => 'サンプル本1',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'book',
                'imageUrl' => 'storage/app/public/products/books/bible-1867195_1920.jpeg',
                'price' => 5000,
                'condition' => 'new',
                'owner_id' => 1
            ],
            [
                'id' => 2,
                'title' => 'サンプル本2',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'book',
                'imageUrl' => 'storage/app/public/products/books/book-1283468_1920.jpeg',
                'price' => 1000,
                'condition' => 'new',
                'owner_id' => 1
            ],
            [
                'id' => 3,
                'title' => 'サンプル本3',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'book',
                'imageUrl' => 'storage/app/public/products/books/book-3510326_1920.jpeg',
                'price' => 500,
                'condition' => 'used',
                'owner_id' => 1
            ],
            [
                'id' => 4,
                'title' => 'サンプル本4',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'book',
                'imageUrl' => 'storage/app/public/products/books/paper-3061485_1920.jpeg',
                'price' => 2000,
                'condition' => 'new',
                'owner_id' => 1
            ],
            [
                'id' => 5,
                'title' => 'サンプル本5',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'book',
                'imageUrl' => 'storage/app/public/products/books/tea-time-3240766_1920.jpeg',
                'price' => 3000,
                'condition' => 'new',
                'owner_id' => 3
            ],
            [
                'id' => 6,
                'title' => 'サンプル本6',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'book',
                'imageUrl' => 'storage/app/public/products/books/rashtravardhan-kataria.jpeg',
                'price' => 6000,
                'condition' => 'new',
                'owner_id' => 3
            ],
            [
                'id' => 20,
                'title' => 'サンプル服1',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'clothes',
                'imageUrl' => 'storage/app/public/products/clothes/blank-1886001_1920.png',
                'price' => 1000,
                'condition' => 'used',
                'owner_id' => 1
            ],
            [
                'id' => 21,
                'title' => 'サンプル服2',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'clothes',
                'imageUrl' => 'storage/app/public/products/clothes/black-shirts.jpeg',
                'price' => 2000,
                'condition' => 'used',
                'owner_id' => 1
            ],
            [
                'id' => 22,
                'title' => 'サンプル服3',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'clothes',
                'imageUrl' => 'storage/app/public/products/clothes/blank-1886008_1920.png',
                'price' => 5000,
                'condition' => 'new',
                'owner_id' => 1
            ],
            [
                'id' => 23,
                'title' => 'サンプル服4',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'clothes',
                'imageUrl' => 'storage/app/public/products/clothes/couple-2619544_1920.jpg',
                'price' => 6000,
                'condition' => 'new',
                'owner_id' => 1
            ],
            [
                'id' => 24,
                'title' => 'サンプル服5',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'clothes',
                'imageUrl' => 'storage/app/public/products/clothes/shirt.jpeg',
                'price' => 3000,
                'condition' => 'new',
                'owner_id' => 3
            ],
            [
                'id' => 25,
                'title' => 'サンプル服6',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'category' => 'clothes',
                'imageUrl' => 'storage/app/public/products/clothes/t-shirts-2603301_1920.jpg',
                'price' => 4000,
                'condition' => 'new',
                'owner_id' => 3
            ]
        ];

        DB::table('products')->insert($products);
    }
}
