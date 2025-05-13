<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('rooms')->insert([
        [
            'room_number' => '101A',
            'type' => 'Single',
            'price' => 1200.00,
            'status' => 'available',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '102B',
            'type' => 'Double',
            'price' => 1800.00,
            'status' => 'occupied',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '103C',
            'type' => 'Suite',
            'price' => 2500.00,
            'status' => 'maintenance',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '104D',
            'type' => 'Single',
            'price' => 1100.00,
            'status' => 'available',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '105E',
            'type' => 'Double',
            'price' => 1750.00,
            'status' => 'available',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '106F',
            'type' => 'Suite',
            'price' => 2600.00,
            'status' => 'occupied',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '107G',
            'type' => 'Single',
            'price' => 1150.00,
            'status' => 'available',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '108H',
            'type' => 'Double',
            'price' => 1850.00,
            'status' => 'maintenance',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '109I',
            'type' => 'Suite',
            'price' => 2550.00,
            'status' => 'available',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'room_number' => '110J',
            'type' => 'Single',
            'price' => 1050.00,
            'status' => 'occupied',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
