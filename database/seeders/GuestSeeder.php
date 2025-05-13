<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('guests')->insert([
        [
            'name' => 'John Doe',
            'emai' => 'john@example.com',
            'phone' => '09171234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Jane Smith',
            'emai' => 'jane.smith@example.com',
            'phone' => '09281234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Michael Johnson',
            'emai' => 'm.johnson@example.com',
            'phone' => '09391234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Emily Davis',
            'emai' => 'emily.davis@example.com',
            'phone' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Chris Brown',
            'emai' => 'cbrown@example.com',
            'phone' => '09091234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sophia Martinez',
            'emai' => 'sophia.m@example.com',
            'phone' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Daniel Lee',
            'emai' => 'dlee@example.com',
            'phone' => '09981234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Isabella Clark',
            'emai' => 'isaclark@example.com',
            'phone' => '09551234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'William Wilson',
            'emai' => 'wilson.w@example.com',
            'phone' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Olivia Lewis',
            'emai' => 'olivia.lewis@example.com',
            'phone' => '09481234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
