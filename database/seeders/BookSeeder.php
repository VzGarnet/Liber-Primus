<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Hai, Miiko!',
            'author_id' => 1,
            'isbn' => '123-321-5678-10-1',
            'genre_id' => 6,
            'synopsis' => 'Kocchi Muite! Miiko (Jepang: こっちむいて!みい子, terj. har. "Lihat Kemari, Miiko!"), yang diterbitkan di Indonesia dengan judul Hai, Miiko!, adalah sebuah seri manga shōjo bergenre komedi karya Eriko Ono. Manga ini telah dimuat dalam majalah Ciao terbitan Shogakukan sejak tahun 1995 dan telah dibundel menjadi 33 volume tankōbon. Manga ini merupakan sekuel dari seri pendahulunya, Miiko desu! (みい子です!, "Im Miiko!"), dan menggambarkan kehidupan seorang anak perempuan kelas empat yang energik dan ceria bernama Miiko di rumah dan sekolahnya.',
            'price' => 24000,
            'publisher_id' => 2,
            'rating' => 4.2,
            'image' => '\images\miko.jpg',
            'stock' => 10,
        ]);
    }
}
