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
            'genre' => 'Psychology',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Fantasi',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Fiksi',
        ]);

        DB::table('genres')->insert([
            'genre' => 'Comedy',
        ]);
    }
}
