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
        ]);

        DB::table('authors')->insert([
            'name' => 'Leila S. Chudori',
            'image' => '/images/author/LeilaSChudori.jpeg',
        ]);

        DB::table('authors')->insert([
            'name' => 'Axie Oh',
            'image' => '/images/author/AxieOh.jpg',
        ]);

        DB::table('authors')->insert([
            'name' => 'James Clear',
            'image' => '/images/author/JamesClear.png',
        ]);

        DB::table('authors')->insert([
            'name' => 'Aka Akasaka',
            'image' => '/images/author/AkaAkasaka.jpg',
        ]);

    }
}
