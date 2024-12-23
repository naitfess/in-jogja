<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = [
            [
                'name' => 'Hotel Tentrem',
                'picture' => 'tentrem.jpg',
            ],
            [
                'name' => 'Hyatt Regency Yogyakarta',
                'picture' => 'hyatt-regency.jpg',
            ],
            [
                'name' => 'The Phoenix Hotel Yogyakarta',
                'picture' => 'phoenix.jpg',
            ],
            [
                'name' => 'Grand Ambarrukmo Hotel',
                'picture' => 'ambarrukmo.jpg',
            ],
            [
                'name' => 'Sheraton Mustika Yogyakarta Resort and Spa',
                'picture' => 'sheraton.jpg',
            ],
            [
                'name' => 'Swiss-Belboutique Yogyakarta',
                'picture' => 'swiss-belboutique.jpg',
            ],
            [
                'name' => 'Eastparc Hotel Yogyakarta',
                'picture' => 'eastparc.jpg',
            ],
            [
                'name' => 'Plataran Heritage Borobudur Hotel',
                'picture' => 'plataran-heritage.jpg',
            ],
        ];

        foreach ($hotels as $hotel) {
            \App\Models\Hotel::create($hotel);
        }
    }
}
