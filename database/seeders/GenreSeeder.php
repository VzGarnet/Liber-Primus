<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            'genre' => 'Adventure',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Romance',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Drama',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Horror',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Thriller',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Comedy',
        ]);
    }
}
