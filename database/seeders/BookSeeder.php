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
            'isbn' => '9786024804725',
            'synopsis' => 'Miiko, siswi kelas 6 SD, selalu penuh semangat! Kehidupan Miiko bersama teman-teman dan keluarga tersayang selalu ramai dan penuh warna! Keseharian yang seru itu masih sama, tapi ada sedikit perubahan pada perasaan Miiko…?! Deg-degan saat membayangkan janji pernikahan di masa depan nanti setelah melihat upacara pernikahan sepupu, lalu menjadi gelisah karena ditanya, “Ada orang yang kamu sukai?” oleh Tappei! Jalani keseharian Miiko yang agak berbeda karena nuansa cinta!',
            'price' => 24000,
            'publisher_id' => 2,
            'rating' => 4.2,
            'image' => '\images\book\miko.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'Laut Bercerita',
            'author_id' => 2,
            'isbn' => '9786024246945',
            'synopsis' => 'Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.',
            'price' => 92000,
            'publisher_id' => 3,
            'rating' => 4.0,
            'image' => '\images\book\LautBercerita.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'The Girl who Fell Beneath the Sea',
            'author_id' => 3,
            'isbn' => '9786230046155',
            'synopsis' => 'Badai mematikan telah merusak tanah kelahiran Mina selama beberapa generasi. Banjir menyapu seluruh desa, sementara perang berdarah dikobarkan untuk memperebutkan sumber daya yang tersisa. Masyarakat di desa Mina memercayai bahwa Dewa Laut mengutuk mereka dengan kematian dan keputusasaan. Dalam upaya untuk menenangkan Dewa Laut, setiap tahun seorang gadis cantik dibuang ke laut untuk menjadi pengantin Dewa Laut, dengan harapan suatu hari "pengantin sejati" akan dipilih dan mengakhiri penderitaan mereka.',
            'price' => 92500,
            'publisher_id' => 2,
            'rating' => 3.9,
            'image' => '\images\book\TheGirl.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa',
            'author_id' => 4,
            'isbn' => 'SCOOPG184449',
            'synopsis' => "Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa adalah buku kategori self improvement karya James Clear. Pada umumnya, perubahan-perubahan kecil seringkali terkesan tak bermakna karena tidak langsung membawa perubahan nyata pada hidup suatu manusia. Jika diumpamakan sekeping koin tidak bisa menjadikan kaya, suatu perubahan positif seperti meditasi selama satu menit atau membaca buku satu halaman setiap hari mustahil menghasilkan perbedaan yang bisa terdeteksi. Namun hal tersebut tidak sejalan dengan pemikiran James Clear, ia merupakan seorang pakar dunia yang terkenal dengan 'habits' atau kebiasaan. Ia tahu bahwa tiap perbaikan kecil bagaikan menambahkan pasir ke sisi positif timbangan dan akan menghasilkan perubahan nyata yang berasal dari efek gabungan ratusan bahkan ribuan keputusan kecil. Ia menamakan perubahan kecil yang membawa pengaruh yang luar biasa dengan nama atomic habits.",
            'price' => 86400,
            'publisher_id' => 2,
            'rating' => 4.7,
            'image' => '\images\book\AtomicHabits.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'AKASHA : Oshi no Ko : Anak Idola 01',
            'author_id' => 5,
            'isbn' => '9786230305269',
            'synopsis' => '"Di dunia hiburan ini, kebohongan adalah senjata." Goro bekerja sebagai dokter spesialis kandungan di daerah. Dia menjalani hari-hari yang jauh dari dunia hiburan. Sementara itu idol "Oshi"-nya, Ai Hoshino mulai menaiki tangga ketenaran. Setelah keduanya berjumpa dalam situasi yang "terburuk", roda takdir pun mulai bergerak. Kakak beradik kembar Aqua dan Ruby masuk ke SMA yang memiliki jurusan seni hiburan. Di dorong rasa panic melihat teman-teman sekelasnya yang sudah berkiprah di dunia hiburan, Ruby pun memulai persiapan untuk berkarir sebagai idol! Sementara itu, Aqua tampil di reality show atas ajakan produser saat dia membintangi serial drama online. Apa sebenarnya “realita” dalam dunia hiburan!? Untuk mendongkrak karir idolnya ia pun tidak serta merta bisa meraihnya dengan mudah. Ai harus bekerja keras setiap saat, di tengah terpaan kritikan dari warganet dan netizen. Awal karirnya meroket di saat anaknya menyaksikan pertunjukan panggung yang ia lakukan, dia memberikan senyum yang tulus, yang membuat orang-orang menyukai hal itu. Komik dengan cerita yang ringan, cocok untuk kalian yang ingin bersantai sambil membaca komik!',
            'price' => 38400,
            'publisher_id' => 3,
            'rating' => 3.8,
            'image' => '\images\\book\OshiNoKo1.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'AKASHA : Oshi no Ko : Anak Idola Vol.5',
            'author_id' => 5,
            'isbn' => '9786230308932',
            'synopsis' => '"Di dunia hiburan ini, kebohongan adalah senjata." Goro bekerja sebagai dokter spesialis kandungan di daerah. Dia menjalani hari-hari yang jauh dari dunia hiburan. Sementara itu idol "Oshi"-nya, Ai Hoshino mulai menaiki tangga ketenaran. Setelah keduanya berjumpa dalam situasi yang "terburuk", roda takdir pun mulai bergerak. Kakak beradik kembar Aqua dan Ruby masuk ke SMA yang memiliki jurusan seni hiburan. Di dorong rasa panic melihat teman-teman sekelasnya yang sudah berkiprah di dunia hiburan, Ruby pun memulai persiapan untuk berkarir sebagai idol! Sementara itu, Aqua tampil di reality show atas ajakan produser saat dia membintangi serial drama online. Apa sebenarnya “realita” dalam dunia hiburan!? Untuk mendongkrak karir idolnya ia pun tidak serta merta bisa meraihnya dengan mudah. Ai harus bekerja keras setiap saat, di tengah terpaan kritikan dari warganet dan netizen. Awal karirnya meroket di saat anaknya menyaksikan pertunjukan panggung yang ia lakukan, dia memberikan senyum yang tulus, yang membuat orang-orang menyukai hal itu. Komik dengan cerita yang ringan, cocok untuk kalian yang ingin bersantai sambil membaca komik!',
            'price' => 38400,
            'publisher_id' => 3,
            'rating' => 4.0,
            'image' => '\images\book\OshiNoKo5.jpeg',
            'stock' => 10,
        ]);


        DB::table('books')->insert([
            'title' => 'Hai, Miiko! 31',
            'author_id' => 1,
            'isbn' => '9786024804725',
            'synopsis' => 'Miiko, siswi kelas 6 SD, selalu penuh semangat! Kehidupan Miiko bersama teman-teman dan keluarga tersayang selalu ramai dan penuh warna! Keseharian yang seru itu masih sama, tapi ada sedikit perubahan pada perasaan Miiko…?! Deg-degan saat membayangkan janji pernikahan di masa depan nanti setelah melihat upacara pernikahan sepupu, lalu menjadi gelisah karena ditanya, “Ada orang yang kamu sukai?” oleh Tappei! Jalani keseharian Miiko yang agak berbeda karena nuansa cinta!',
            'price' => 20000,
            'publisher_id' => 2,
            'rating' => 4.4,
            'image' => '\images\book\HaiMiiko31.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'The Habit Journal',
            'author_id' => 4,
            'isbn' => '9786020663142',
            'synopsis' => 'Habit Journal adalah buku catatan berdasarkan buku mega bestseller Atomic Habits yang memungkinkan kita memaksimalkan terbentuknya kebiasaan baik.
            Jurnal yang unik ini dilengkapi dengan 12 halaman Pelacak Kebiasaan yang bisa ditempel di lemari es, meja kerja, atau tempat mana pun yang kita suka. Selain itu, indeks dan bagian Satu Garis per Hari di jurnal ini akan memudahkan kita membentuk kebiasaan membuat jurnal harian.
            Ada empat bagian dari jurnal ini yang menyediakan contoh dan desain, yaitu Perkakas Pelacak Kebiasaan, Perkakas Pembuatan Keputusan, Perkakas Produktivitas, dan Perkakas Kebugaran. Semua itu akan membantu kita melakukan perubahan-perubahan kecil yang mendatangkan hasil luar biasa.',
            'price' => 70400,
            'publisher_id' => 1,
            'rating' => 3.5,
            'image' => '\images\book\HabitJournal.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'Xoxo',
            'author_id' => 3,
            'isbn' => '9786020668673',
            'synopsis' => 'JAYS Karaoke berada di tengah ­tengah strip mall atau pusat perbelanjaan terbuka di Koreatown, tepatnya di antara Boba Land 2 dan Sookie’s Hair Emporium. Pintu Sookie’s Hair Emporium terpentang lebar saat aku lewat. ”Yah, Jenny­yah!” Sookie Kim, pemilik sekaligus penata rambut tempat itu, berdiri di ambang pintu sambil memegang kantong plastik dan catokan rambut. ”Kenapa tidak menyapa?” ”Halo, Mrs. Kim,” sapaku. Kemudian aku menjulurkan leher untuk memandang ke balik bahunya ke arah tiga wanita paruh baya yang duduk berderet di bawah alat pengering rambut sambil menonton drama Korea di televisi di dinding. ”Hai, Mrs. Lim, Mrs. Chang, Mrs. Sutjiawan.” ”Hai, Jenny,” balas ketiganya sambil melambai singkat ke arahku lalu segera kembali memperhatikan pasangan di layar kaca yang sepertinya akan melakukan adegan ciuman khas drama Korea. Tokoh pria memiringkan kepala ke satu sisi, tokoh wanita ke sisi lain, bibir mereka bersentuhan dan terus menempel sementara kamera menjauh diiringi musik latar dramatis.',
            'price' => 71200,
            'publisher_id' => 2,
            'rating' => 3.9,
            'image' => '\images\book\Xoxo.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'AKASHA : Oshi no Ko : Anak Idola 06',
            'author_id' => 5,
            'isbn' => '9786230309342',
            'synopsis' => '"Di dunia hiburan ini, kebohongan adalah senjata." Goro bekerja sebagai dokter spesialis kandungan di daerah. Dia menjalani hari-hari yang jauh dari dunia hiburan. Sementara itu idol "Oshi"-nya, Ai Hoshino mulai menaiki tangga ketenaran. Setelah keduanya berjumpa dalam situasi yang "terburuk", roda takdir pun mulai bergerak. Kakak beradik kembar Aqua dan Ruby masuk ke SMA yang memiliki jurusan seni hiburan. Di dorong rasa panic melihat teman-teman sekelasnya yang sudah berkiprah di dunia hiburan, Ruby pun memulai persiapan untuk berkarir sebagai idol! Sementara itu, Aqua tampil di reality show atas ajakan produser saat dia membintangi serial drama online. Apa sebenarnya “realita” dalam dunia hiburan!? Untuk mendongkrak karir idolnya ia pun tidak serta merta bisa meraihnya dengan mudah. Ai harus bekerja keras setiap saat, di tengah terpaan kritikan dari warganet dan netizen. Awal karirnya meroket di saat anaknya menyaksikan pertunjukan panggung yang ia lakukan, dia memberikan senyum yang tulus, yang membuat orang-orang menyukai hal itu. Komik dengan cerita yang ringan, cocok untuk kalian yang ingin bersantai sambil membaca komik!',
            'price' => 38400,
            'publisher_id' => 3,
            'rating' => 4.7,
            'image' => '\images\book\OshiNoKo6.jpg',
            'stock' => 10,
        ]);

    }
}
