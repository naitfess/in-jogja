<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guides = [
            [
                'name' => 'Budi Santoso',
                'picture' => 'guide1.jpg',
            ],
            [
                'name' => 'Siti Aminah',
                'picture' => 'guide2.jpg',
            ],
            [
                'name' => 'Rina Sari',
                'picture' => 'guide3.jpg',
            ],
            [
                'name' => 'Dewi Lestari',
                'picture' => 'guide4.jpg',
            ],
            [
                'name' => 'Agus Wijaya',
                'picture' => 'guide5.jpg',
            ],
            [
                'name' => 'Indra Gunawan',
                'picture' => 'guide6.jpg',
            ],
            [
                'name' => 'Maya Putri',
                'picture' => 'guide7.jpg',
            ],
            [
                'name' => 'Rudi Hartono',
                'picture' => 'guide8.jpg',
            ],
            [
                'name' => 'Lina Kusuma',
                'picture' => 'guide9.jpg',
            ],
            [
                'name' => 'Tina Kartika',
                'picture' => 'guide10.jpg',
            ],
        ];

        foreach ($guides as $guide) {
            \App\Models\Guide::create($guide);
        }
    }
}
