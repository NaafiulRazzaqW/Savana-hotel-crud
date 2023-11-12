<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Room::create([
        'image' => 'oneBed.jpg',
        'title' => 'One Bed Extra',
        'description' => 'One Bed With Extra TV',
        'price'=> 16,
       ]) ;
    }
}
