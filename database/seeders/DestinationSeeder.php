<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            [
                'name' => 'Taman Sari',
                'information' => 'Taman Sari adalah kompleks keraton yang dibangun oleh Sultan Hamengkubuwono I pada tahun 1758. Taman ini dulunya merupakan tempat peristirahatan keluarga kerajaan. Taman Sari terdiri dari dua bagian, yaitu taman dan kompleks bangunan. Taman Sari memiliki luas sekitar 10 hektar dan terdiri dari kolam, taman, dan bangunan-bangunan.',
                'location' => 'Yogyakarta',
                'picture' => 'taman-sari.jpg',
            ],
            [
                'name' => 'Candi Prambanan',
                'information' => 'Candi Prambanan adalah candi Hindu terbesar di Indonesia. Candi ini dibangun pada abad ke-9 oleh Rakai Pikatan, raja Kerajaan Mataram Kuno. Candi Prambanan terdiri dari tiga candi utama yang masing-masing didedikasikan untuk Trimurti, yaitu Brahma, Wisnu, dan Siwa. Candi Prambanan merupakan salah satu situs warisan dunia UNESCO.',
                'location' => 'Yogyakarta',
                'picture' => 'candi-prambanan.jpg',

            ],
            [
                'name' => 'Pantai Parangtritis',
                'information' => 'Pantai Parangtritis adalah pantai yang terletak di Bantul, Yogyakarta. Pantai ini terkenal dengan pasir putihnya dan ombak yang besar. Pantai Parangtritis juga memiliki legenda yang berkaitan dengan Nyi Roro Kidul, ratu pantai selatan. Pantai Parangtritis sering dijadikan tempat wisata oleh wisatawan lokal maupun mancanegara.',
                'location' => 'Yogyakarta',
                'picture' => 'pantai-parangkritis.jpg',
            ],
            [
                'name' => 'Candi Borobudur',
                'information' => 'Candi Borobudur adalah candi Buddha terbesar di Indonesia. Candi ini dibangun pada abad ke-9 oleh Wangsa Syailendra. Candi Borobudur terdiri dari sembilan tingkat yang masing-masing melambangkan perjalanan menuju pencerahan. Candi Borobudur merupakan salah satu situs warisan dunia UNESCO.',
                'location' => 'Yogyakarta',
                'picture' => 'candi-borobudur.jpg',
            ],
            [
                'name' => 'Keraton Yogyakarta',
                'information' => 'Keraton Yogyakarta adalah istana yang merupakan pusat pemerintahan Kesultanan Yogyakarta. Keraton ini dibangun oleh Sultan Hamengkubuwono I pada tahun 1755. Keraton Yogyakarta memiliki arsitektur yang khas dan merupakan salah satu ikon pariwisata Yogyakarta.',
                'location' => 'Yogyakarta',
                'picture' => 'keraton-yogyakarta.jpg',
            ],
            [
                'name' => 'Goa Jomblang',
                'information' => 'Goa Jomblang adalah goa alam yang terletak di Gunung Kidul, Yogyakarta. Goa ini terkenal dengan keindahan alamnya, seperti cahaya alami yang masuk melalui lubang goa dan tumbuhan hijau yang tumbuh di dalam goa. Goa Jomblang sering dijadikan tempat wisata petualangan oleh para wisatawan.',
                'location' => 'Yogyakarta',
                'picture' => 'goa-jomblang.jpg',
            ],
            [
                'name' => 'Malioboro',
                'information' => 'Malioboro adalah jalan utama di Yogyakarta yang terkenal dengan keramaian dan keberagaman budayanya. Malioboro merupakan pusat perbelanjaan dan kuliner di Yogyakarta. Di sepanjang Malioboro terdapat berbagai toko, restoran, dan pedagang kaki lima yang menjual berbagai macam barang dan makanan.',
                'location' => 'Yogyakarta',
                'picture' => 'malioboro.jpg',
            ],
            [
                'name' => 'Pantai Indrayanti',
                'information' => 'Pantai Indrayanti adalah pantai yang terletak di Gunung Kidul, Yogyakarta. Pantai ini terkenal dengan pasir putihnya dan air laut yang jernih. Pantai Indrayanti juga memiliki tebing-tebing yang menjulang tinggi dan memberikan pemandangan yang indah.',
                'location' => 'Yogyakarta',
                'picture' => 'pantai-indrayanti.jpg',
            ],
        ];

        foreach ($destinations as $destination) {
            \App\Models\Destination::create($destination);
        }
    }
}
