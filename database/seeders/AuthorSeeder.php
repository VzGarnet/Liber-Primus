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
            'image' => '/images/OnoEriko.jpg',
        ]);

        DB::table('authors')->insert([
            'name' => 'Leila S. Chudori',
            'image' => '/images/LeilaSChudori.jpeg',
        ]);

        DB::table('authors')->insert([
            'name' => 'Axie Oh',
            'image' => '/images/AxieOh.jpg',
        ]);

        DB::table('authors')->insert([
            'name' => 'James Clear',
            'image' => '/images/JamesClear.png',
        ]);

        DB::table('authors')->insert([
            'name' => 'Aka Akasaka',
            'image' => '/images/AkaAkasaka.jpg',
        ]);

    }
}
