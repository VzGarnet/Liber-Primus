<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            'name' => 'Ono Eriko',
            'image' => '/images/author/OnoEriko.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);

        DB::table('authors')->insert([
            'name' => 'Leila S. Chudori',
            'image' => '/images/author/LeilaSChudori.jpeg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);

        DB::table('authors')->insert([
            'name' => 'Axie Oh',
            'image' => '/images/author/AxieOh.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);

        DB::table('authors')->insert([
            'name' => 'James Clear',
            'image' => '/images/author/JamesClear.png',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);

        DB::table('authors')->insert([
            'name' => 'Aka Akasaka',
            'image' => '/images/author/AkaAkasaka.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);
        
        DB::table('authors')->insert([
            'name' => 'J.S. Khairen',
            'image' => '/images/author/J.S.Kahiren.png',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);
        
        DB::table('authors')->insert([
            'name' => 'Ratih Kumala',
            'image' => '/images/author/RatihKumala.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);
        
        DB::table('authors')->insert([
            'name' => 'Malcolm Gladwell',
            'image' => '/images/author/MalcolmGladwell.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);
        
        DB::table('authors')->insert([
            'name' => 'J.K. Rowling',
            'image' => '/images/author/JKRowling.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);
        
        DB::table('authors')->insert([
            'name' => 'Rick Riordan',
            'image' => '/images/author/RickRicordan.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);
        
        DB::table('authors')->insert([
            'name' => 'Tere Liye',
            'image' => '/images/author/TereLiye.jpg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);
        
        DB::table('authors')->insert([
            'name' => 'Eiichiro Oda',
            'image' => '/images/author/EiichiroOda.jpeg',
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.',
        ]);

    }
}
