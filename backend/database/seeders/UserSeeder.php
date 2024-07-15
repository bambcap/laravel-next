<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'taketo',
            'displayName' => 'Taketo Yoshida',
            'email' => 'taketo@example.com',
            "profileImageUrl" => "storage/app/public/users/1.png",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure, sint laborum? Aperiam ipsum placeat explicabo esse architecto asperiores dolor illum, provident ipsam aliquid. Quo enim voluptas odio suscipit reiciendis ullam!"
        ]);
        User::factory()->create([
            'name' => 'takuya',
            'displayName' => 'Takuya Tejima',
            'email' => 'takuya@example.com',
            "profileImageUrl" => "storage/app/public/users/2.png",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure, sint laborum? Aperiam ipsum placeat explicabo esse architecto asperiores dolor illum, provident ipsam aliquid. Quo enim voluptas odio suscipit reiciendis ullam!"
        ]);
        User::factory()->create([
            'name' => 'kourin',
            'displayName' => 'Yoshiki Takabayashi',
            'email' => 'kourin@example.com',
            "profileImageUrl" => "storage/app/public/users/3.png",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure, sint laborum? Aperiam ipsum placeat explicabo esse architecto asperiores dolor illum, provident ipsam aliquid. Quo enim voluptas odio suscipit reiciendis ullam!"
        ]);
    }
}



