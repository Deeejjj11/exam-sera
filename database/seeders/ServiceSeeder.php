<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('services')->insert([
        [
            'name' => 'Room Cleaning',
            'description' => 'Daily room cleaning and sanitation service.',
            'price' => 300.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Laundry Service',
            'description' => 'Washing, drying, and folding of clothes.',
            'price' => 150.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Airport Pickup',
            'description' => 'Transportation from the airport to the hotel.',
            'price' => 500.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Spa Package',
            'description' => 'Access to massage, sauna, and wellness treatments.',
            'price' => 1200.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Breakfast Buffet',
            'description' => 'Unlimited breakfast buffet from 6am to 10am.',
            'price' => 250.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Extra Bed',
            'description' => 'Add an extra bed to your room for more guests.',
            'price' => 400.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Late Checkout',
            'description' => 'Extend your stay until 2 PM.',
            'price' => 200.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Fitness Center Access',
            'description' => 'Full-day access to gym and fitness facilities.',
            'price' => 100.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Mini Bar Refill',
            'description' => 'Refill of mini bar snacks and drinks.',
            'price' => 180.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Business Center Access',
            'description' => 'Use of meeting rooms, computers, and printers.',
            'price' => 350.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
