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

    }
}
