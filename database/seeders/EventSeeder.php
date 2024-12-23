<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Jogja Art Festival',
                'picture' => 'jogja-art-festival.jpg',
                'location' => 'Taman Budaya Yogyakarta',
                'date' => '2024-05-15',
            ],
            [
                'name' => 'Prambanan Jazz Festival',
                'picture' => 'prambanan-jazz.jpg',
                'location' => 'Candi Prambanan',
                'date' => '2024-07-10',
            ],
            [
                'name' => 'Sekaten Yogyakarta',
                'picture' => 'sekaten.jpg',
                'location' => 'Alun-Alun Utara Yogyakarta',
                'date' => '2024-11-01',
            ],
            [
                'name' => 'Jogja Fashion Week',
                'picture' => 'jogja-fashion-week.jpg',
                'location' => 'Jogja Expo Center',
                'date' => '2024-09-20',
            ],
        ];

        foreach ($events as $event) {
            \App\Models\Event::create($event);
        }
    }
}
