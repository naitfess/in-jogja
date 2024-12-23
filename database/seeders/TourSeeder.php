<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tours = [
            [
                'name' => 'Yogyakarta Heritage Package',
                'information' => 'Taman Sari, Keraton Yogyakarta',
                'picture' => 'taman-sari.jpg',
                'max_capacity' => 10,
                'days' => 2,
                'price' => 1800,
            ],
            [
                'name' => 'Cultural Wonders Package',
                'information' => 'Candi Prambanan, Candi Borobudur',
                'picture' => 'candi-prambanan.jpg',
                'max_capacity' => 5,
                'days' => 2,
                'price' => 2000,
            ],
            [
                'name' => 'Beach Escape Package',
                'information' => 'Pantai Parangtritis, Pantai Indrayanti',
                'picture' => 'pantai-parangkritis.jpg',
                'max_capacity' => 10,
                'days' => 1,
                'price' => 1400,
            ],
            [
                'name' => 'Adventure and Mystique Package',
                'information' => 'Goa Jomblang, Bukit Bintang',
                'picture' => 'goa-jomblang.jpg',
                'max_capacity' => 15,
                'days' => 2,
                'price' => 2100,
            ],
            [
                'name' => 'Volcano Trekking Package',
                'information' => 'Gunung Merapi',
                'picture' => 'gunung-merapi.jpg',
                'max_capacity' => 10,
                'days' => 1,
                'price' => 1200,
            ],
            [
                'name' => 'Historical and Natural Retreat Package',
                'information' => 'Candi Borobudur, Gunung Merapi',
                'picture' => 'candi-borobudur.jpg',
                'max_capacity' => 20,
                'days' => 3,
                'price' => 1300,
            ],
            [
                'name' => 'Romantic Getaway Package',
                'information' => 'Bukit Bintang, Malioboro',
                'picture' => 'bukit-bintang.png',
                'max_capacity' => 12,
                'days' => 1,
                'price' => 1000,
            ],
            [
                'name' => 'Full Yogyakarta Experience Package',
                'information' => 'Taman Sari, Candi Prambanan, Keraton Yogyakarta, Pantai Indrayanti',
                'picture' => 'malioboro.jpg',
                'max_capacity' => 10,
                'days' => 4,
                'price' => 3000,
            ],
        ];

        foreach ($tours as $tour) {
            \App\Models\Tour::create($tour);
        }
    }
}
