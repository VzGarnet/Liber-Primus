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
            'rating' => 4.3,
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
            'rating' => 3.9,
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
            'rating' => 4.0,
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
            'rating' => 4.6,
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
            'rating' => 4.8,
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
            'rating' => 4.1,
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
            'rating' => 4.3,
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
            'rating' => 4.0,
            'image' => '\images\book\OshiNoKo6.jpg',
            'stock' => 10,
        ]);

        DB::table('books')->insert([
            'title' => 'Melangkah',
            'author_id' => 6,
            'isbn' => '9786020523316',
            'synopsis' => 'Listrik padam di seluruh Jawa dan Bali secara misterius. Ancaman nyata kekuatan baru yang hendak menaklukkan Nusantara. Saat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta manusia ada di tangan mereka! 
            Empat mahasiswa ekonomi ini, harus bertarung melawan pasukan berkuda yang bisa melontarkan listrik! Semua dipersulit oleh seorang buronan tingkat tinggi bertopeng pahlawan yang punya rencana mengerikan. Ternyata pesan arwah nenek moyang itu benar-benar terwujud. 
            “Akan datang kegelapan yang berderap, bersama ribuan kuda raksasa di kala malam. Mereka bangun setelah sekian lama, untuk menghancurkan Nusantara. Seorang lelaki dan seorang perempuan ditakdirkan membaurkan air di lautan dan api di pegunungan. Menyatukan tanah yang menghujam, dan udara yang terhampar.” 
            Kisah tentang persahabatan, tentang jurang ego anak dan orangtua, tentang menyeimbangkan logika dan perasaan. Juga tentang melangkah menuju masa depan. Bahwa, apa pun yang menjadi luka masa lalu, biarlah mengering bersama waktu.
            ',
            'price' => 74400,
            'publisher_id' => 1,
            'rating' => 3.8,
            'image' => '\images\book\Melangkah.jpg',
            'stock' => 500,
        ]);
        
        DB::table('books')->insert([
            'title' => 'Gadis Kretek',
            'author_id' => 7,
            'isbn' => '9789792281415',
            'synopsis' => 'Pak Raja sekarat. Dalam menanti ajal, ia memanggil satu nama perempuan yang bukan istrinya; Jeng Yah. Tiga anaknya, pewaris Kretek Djagad Raja, dimakan gundah. Sang ibu pun terbakar cemburu terlebih karena permintaan terakhir suaminya ingin bertemu Jeng Yah. Maka berpacu dengan malaikat maut, Lebas, Karim, dan Tegar, pergi ke pelosok Jawa untuk mencari Jeng Yah, sebelum ajal menjemput sang Ayah. 
            Perjalanan itu bagai napak tilas bisnis dan rahasia keluarga. Lebas, Karim, dan Tegar bertemu dengan pelinting tua dan menguak asal-usul Kretek Djagad Raja hingga menjadi kretek nomor 1 di Indonesia. Lebih dari itu, ketiganya juga mengetahui kisah cinta ayah mereka dengar; Jeng Yah, yang ternyata adalah pemilik Kretek Gadis, kretek lokal Kota M yang terkenal pada zamannya. Apakah Lebas, Karim, dan Tegar akhirnya berhasil menemukan Jeng Yah? 
            Gadis Kretek tidak sekadar bercerita tentang cinta dan pencarian jati diri para tokohnya. Dengan latar Kota M, Kudus, Jakarta, dari periode penjajahan Belanda hingga kemerdekaan, Gadis Kretek akan membawa pembaca berkenalan dengan perkembangan industri kretek di Indonesia. Kaya akan wangi tembakau. Sarat dengan aroma cinta.
            ',
            'price' => 60000,
            'publisher_id' => 1,
            'rating' => 4.5,
            'image' => '\images\book\GadisKretek.jpg',
            'stock' => 378,
        ]);
                
        DB::table('books')->insert([
            'title' => 'Outliers',
            'author_id' => 8,
            'isbn' => '9780316056281',
            'synopsis' => 'Dalam buku yang menakjubkan ini, Malcolm Gladwell membawa pembaca pada perjalanan intelektual yang cukup menyegarkan untuk menunjukkan pada kita, apa hal yang membuat orang bisa menjadi sangat berprestasi. Malcolm Gladwell, dalam buku “Outliers” ini pun mengungkapkan, jawaban dari pertanyaan tersebut adalah bahwa kita terlalu memperhatikan seperti apa orang-orang sukses itu, dan malah jarang memperhatikan dari mana orang-orang sukses itu berasal: seperti budaya mereka, keluarga mereka, generasi mereka, sampai pengalaman-pengalaman unik dari asuhan yang mereka jalani.',
            'price' => 144000,
            'publisher_id' => 3,
            'rating' => 4.3,
            'image' => '\images\book\Outliers.jpg',
            'stock' => 55,
        ]);
                
        DB::table('books')->insert([
            'title' => 'Harry Potter And The Order Of The Phoenix',
            'author_id' => 9,
            'isbn' => '9781338299182',
            'synopsis' => 'Harry Potter and the Order of the Phoenix" is the fifth novel in the phenomenal series written by J.K. Rowling. The story continues the adventures of Harry Potter, a young wizard who struggles against darkness and evil forces threatening the wizarding world. After returning to his relatives" home at Privet Drive for the summer holidays, Harry feels lonely and isolated. No letters from his friends, and their opinions about what happened in the previous year (related to the mysterious return of Lord Voldemort) are left unspoken by the wizarding media. Skepticism regarding Harrys account of Voldemorts return causes tension between Harry and the Minister of Magic, Cornelius Fudge, and the Ministry of Magic. 

            At Hogwarts, Harry faces another set of challenges as he contends with social and administrative changes. The Minister of Magic assigns Dolores Umbridge as the new Hogwarts High Inquisitor, with the goal of overseeing the school and eliminating anything related to Voldemorts return. However, Umbridge turns out to be more authoritarian and cruel than they imagined, leading to unrest among the students and staff. During this tumultuous academic year, Harry strives to form a secret group called "The Order of the Phoenix" led by Professor Dumbledore. The group aims to fight against the Ministry of Magic and confront the growing threat of Voldemort. Together with his friends, including Hermione Granger and Ron Weasley, Harry trains in magic and prepares to face greater dangers. 
            
            However, Harry also faces opposition from his friends themselves, as they tend to disbelieve his claims about the very real threat of Voldemort. At the same time, he experiences an odd psychic connection with Lord Voldemort known as "mind-link." This connection allows him to sense Voldemorts emotions and thoughts, and vice versa. The epic battle between Hogwarts and Voldemorts forces looms on the horizon, and Harry must confront not only external threats but also inner conflicts. The fate of the wizarding world hangs in the balance as the struggle against darkness intensifies, leading to a climactic and intense showdown. Throughout this harrowing journey, Harry learns the importance of friendship, loyalty, and the strength that comes from unity in the face of adversity.
            ',
            'price' => 260000,
            'publisher_id' => 3,
            'rating' => 4.7,
            'image' => '\images\book\HarryPotterPhoenix.jpg',
            'stock' => 1254,
        ]);
                        
        DB::table('books')->insert([
            'title' => 'Harry Potter And The Sorcerers Stone',
            'author_id' => 9,
            'isbn' => '9781338299144',
            'synopsis' => "Harry Potter and the Sorcerer's Stone is the first novel in the epic Harry Potter series, written by J.K. Rowling. The story begins the extraordinary journey of an orphaned boy named Harry Potter, who never knew he was destined for greatness as a wizard. Harry Potter, ignored and mistreated by his aunt and uncle since infancy, receives an unexpected letter. On his eleventh birthday, a mysterious man named Hagrid appears and reveals the truth about his heritage: Harry is a renowned wizard, and his parents were killed by the dark wizard, Lord Voldemort, when Harry was just a baby. In a short time, Harry is invited to attend Hogwarts School of Witchcraft and Wizardry, the renowned school of magic in the wizarding world. 

            There, he meets his loyal classmates, Hermione Granger and Ron Weasley. Together, they navigate a world filled with enchantment, magical creatures, and astonishing secrets. However, there is one terrifying secret hidden within Hogwarts: the Sorcerer's Stone. This stone has the power to grant immortality and unlimited wealth to its possessor. The evil Lord Voldemort seeks to acquire the Sorcerer's Stone and use it to regain his full power. Only Harry stands a chance of stopping Voldemort's wicked plans. With the guidance of wise teachers and the heroic actions of his friends, Harry faces daunting challenges and embarks on extraordinary adventures to protect the Sorcerer's Stone and save Hogwarts from an unimaginable threat. 
            
            Along the way, Harry discovers bravery, true friendship, and an understanding of his inevitable destiny. Harry Potter and the Sorcerer's Stone is a tale filled with magic, wonder, and mystery. It is the beginning of the epic journey of Harry Potter that has captivated the hearts of millions of readers worldwide, transporting them into a mesmerizing and enchanting world of wizardry.
             ",
            'price' => 227000,
            'publisher_id' => 3,
            'rating' => 4.9,
            'image' => '\images\book\HarryPotterStone.jpg',
            'stock' => 520,
        ]);
                        
        DB::table('books')->insert([
            'title' => 'Percy Jackson And The Olympians #6: The Chalice Of The Gods',
            'author_id' => 10,
            'isbn' => '9786232424128',
            'synopsis' => "Terkadang, aku bisa sangat membenci ayahku (baca: Poseidon). Pada usia 17, dalam kesibukanku mendaftar kuliah di Universitas Roma Baru, aku diberi tahu bahwa aku membutuhkan 3 surat rekomendasi dari 3 dewa berbeda. Untuk alasan menyebalkan: eksistensiku di dunia ini menyalahi aturan. Aku tidak layak masuk Roma Baru hanya karena ayahku melanggar perjanjian: dewa Tiga Besar tidak boleh punya anak demigod. Tentu saja Dad sangat membantu. 

            Zeus minta 25, Dad menawar jadi 3 surat saja. Dan, aku tidak boleh menyodorkan formulir kepada para dewa. Merekalah yang harus mendatangiku, dengan misi untuk kuselesaikan (AKU BENCI MISI!). Bagian yang membuatku membenci Poseidon? Dia memasang posterku di seluruh penjuru Olympus.
            
             Foto yang diambil dari cermin kamar mandiku saat rambutku basah, dengan mata mengantuk, dan mulut menjepit sikat gigi. Foto nista yang entah diambil oleh siapa dan kini dilihat oleh semua dewa dan—aku sungguh tidak ingin membicarakannya Percy Jackson, Mengubah jadwal kencanku dengan Annabeth menjadi sesi curhat.
            ",
            'price' => 71100,
            'publisher_id' => 1,
            'rating' => 4.6,
            'image' => '\images\book\PercyJacksonOlympians.jpg',
            'stock' => 127,
        ]);
                                
        DB::table('books')->insert([
            'title' => 'Percy Jackson #3: The Titans Curse',
            'author_id' => 10,
            'isbn' => '9786232422551',
            'synopsis' => "Aku tidak menyukai para Pemburu Artemis. Mereka angkuh, galak, dan benci lelaki. Lebih tidak suka lagi karena mereka berhasil merekrut Bianca di Angelo, blasteran baru. Dia sangat egois karena tega meninggalkan adiknya, Nico, sendirian. Ya, ya, tahu apa aku tentang isi hati para gadis? Tapi, alasan utama aku kesal adalah karena Annabeth sepertinya tertarik untuk ber—ah, membahasnya pun aku malas. Maaf malah curhat.

            Ayo bahas teror mengerikan yang sudah menjadi menu harian para pahlawan. Annabeth diculik Manticore, Dewi Artemis disekap, dan ada monster purba yang entah berkeliaran di mana, siap untuk mendatangkan kiamat bagi para dewa. Ramalan sama sekali tidak mencerahkan. Menyebut-nyebut tentang Kutukan Bangsa Titan, ditutup dengan kalimat penyemangat, Dan, seorang akan binasa di tangan orang tuanya. Aku benci ramalan. Terutama yang bilang aku akan tewas, dalam berbagai cara. Percy Jackson, Setelah disuruh Athena jauh-jauh dari putrinya, Gunung Olympus.
            ",
            'price' => 71100,
            'publisher_id' => 1,
            'rating' => 4.9,
            'image' => '\images\book\PercyJacksonTitan.jpg',
            'stock' => 55,
        ]);
                                        
        DB::table('books')->insert([
            'title' => 'Pulang',
            'author_id' => 11,
            'isbn' => '9786239554507',
            'synopsis' => "Buku novel yang berjudul Pulang ini merupakan karya dari penulis novel yang banyak digemari karya-karyanya, yaitu Tere Liye. Novel ini dapat dinikmati oleh pembaca baik di kalangan remaja maupun orang dewasa. Kisah ini menceritkan perjalanan sosok pria bernama Bujang yang begitu suskses dalam bisnis shadow economy yang ia geluti. Kepandaian dan keteguhan prinsipnya telah mengantarkannya ke puncak kesuksesan. Sebagai seorang mafia, Bujang sangat disegani oleh pelaku bisnis shadow economy dari berbagai negara lain. Bahkan seorang presiden dibuat tak berkutik di hadapanya. 

            Namun, untuk sampai di titik kesuksesan itu memang tidaklah mudah bagi Bujang. Ia harus melewati berbagai pertempuran serta penghianatan yang begitu menyakitkan. Bahkan karena kefokusannya menjalankan bisnis jagal dunia milik keluaga Tong ini, ia sampai tak sempat mengucapkan salam perpisahan kala bapak ibunya pulang mengahadap sang tuhan. Novel Pulang karya Tere Liye ini mengkat kisah pergulatan hidup sosok pria kecil dari pelosok daratan Bukit Tinggi yang kemudian dibawa ke kota untuk ditempa menjadi seorang tukang jagal dunia. Keteguhan, keuletan, serta kesetiannya telah mengantarkan dirinya ke puncak tertinggi kesuksesanya. Akan tetapi, setelah semua perjalanan yang ia lalui, ia menyadari kehampaan besar di dalam hidupnya. Semua prestasi dan pencapaianya dalam bidang shadow economy rupanya tak bisa memberikan ketenagan apapun dalam hidupnya. Saat itulah ia merasa kedamaianlah yang ia butuhkan dan kini ia telah menyadari makna pulang yang sebenarnya, yakni pulang menjemput kedamaian.
            ",
            'price' => 80100,
            'publisher_id' => 2,
            'rating' => 4.2,
            'image' => '\images\book\Pulang.jpeg',
            'stock' => 87,
        ]);
                                                
        DB::table('books')->insert([
            'title' => 'Matahari Minor',
            'author_id' => 11,
            'isbn' => '9786239987893',
            'synopsis' => "Namaku Seli, dan aku bisa mengeluarkan petir. Apa yang akan kalian lakukan jika teman kalian dalam bahaya besar? Apakah menolongnya? Atau diam saja tidak bisa melakukan apapun? Aku tahu apa yang akan aku lakukan: berangkat bertarung membantunya. Kali ini kami bertualang ke Klan yang malam-malamnya adalah horor panjang. Kekuatan gelap menyelimuti separuh Klan, dan aku harus memecahkan misteri pesan yang dikirimkan lewat teknologi mimpi. Petualangan ini tidak kalah seru, tidak kalah menegangkan. Dan sungguh, aku mohon maaf, kalian mungkin berteriak kesal saat tiba di halaman terakhir buku ini.",
            'price' => 89100,
            'publisher_id' => 2,
            'rating' => 4.4,
            'image' => '\images\book\MatahariMinor.jpg',
            'stock' => 477,
        ]);
                                                        
        DB::table('books')->insert([
            'title' => 'One Piece 103',
            'author_id' => 12,
            'isbn' => '9786230048999',
            'synopsis' => "Di antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang. Komik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.",
            'price' => 36000,
            'publisher_id' => 1,
            'rating' => 3.7,
            'image' => '\images\book\OnePiece103.jpg',
            'stock' => 63,
        ]);

                                                                
        DB::table('books')->insert([
            'title' => 'One Piece 08 (2023)',
            'author_id' => 12,
            'isbn' => '9789792046571',
            'synopsis' => "Tanpa kenal rasa takut akan kematian, Luffy menantang Krieg berduel. Akhirnya pertarungan sengit di atas restoran terapung pun berakhir. Kini, tibalah saatnya bagi Sanji untuk melanjutkan perjalanan.",
            'price' => 36000,
            'publisher_id' => 1,
            'rating' => 4.0,
            'image' => '\images\book\OnePiece08.jpg',
            'stock' => 95,
        ]);


        
            
        

    }
}
