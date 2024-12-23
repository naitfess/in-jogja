<?php

namespace Database\Seeders;

use App\Models\Event;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Destination;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Tour;
use App\Models\Transportation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([DestinationSeeder::class, EventSeeder::class, HotelSeeder::class, TransportationSeeder::class, GuideSeeder::class, TourSeeder::class]);
        Destination::all();
        Event::all();
        Hotel::all();
        Transportation::all();
        Guide::all();
        Tour::all();

        User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
    }
}
