<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transportations = [
            [
                'name' => 'Toyota HiAce',
                'picture' => 'hiace.jpg',
            ],
            [
                'name' => 'Mercedes-Benz Sprinter',
                'picture' => 'sprinter.jpg',
            ],
            [
                'name' => 'Ford Transit',
                'picture' => 'transit.jpg',
            ],
            [
                'name' => 'Nissan NV350',
                'picture' => 'nv350.jpg',
            ],
        ];

        foreach ($transportations as $transportation) {
            \App\Models\Transportation::create($transportation);
        }
    }
}
