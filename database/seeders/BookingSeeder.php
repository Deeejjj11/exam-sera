<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('bookings')->insert([
        [
            'guest_id' => 1,
            'room_id' => 2,
            'service_id' => 1,
            'check_in' => '2025-06-01',
            'check_out' => '2025-06-05',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 2,
            'room_id' => 3,
            'service_id' => null,
            'check_in' => '2025-06-10',
            'check_out' => '2025-06-12',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 3,
            'room_id' => 1,
            'service_id' => 2,
            'check_in' => '2025-05-20',
            'check_out' => '2025-05-22',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 4,
            'room_id' => 5,
            'service_id' => 3,
            'check_in' => '2025-05-15',
            'check_out' => '2025-05-18',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 5,
            'room_id' => 4,
            'service_id' => null,
            'check_in' => '2025-07-01',
            'check_out' => '2025-07-04',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 6,
            'room_id' => 2,
            'service_id' => 1,
            'check_in' => '2025-07-10',
            'check_out' => '2025-07-12',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 7,
            'room_id' => 3,
            'service_id' => null,
            'check_in' => '2025-08-01',
            'check_out' => '2025-08-03',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 8,
            'room_id' => 1,
            'service_id' => 2,
            'check_in' => '2025-08-05',
            'check_out' => '2025-08-09',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 9,
            'room_id' => 4,
            'service_id' => 3,
            'check_in' => '2025-09-01',
            'check_out' => '2025-09-05',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'guest_id' => 10,
            'room_id' => 5,
            'service_id' => null,
            'check_in' => '2025-09-10',
            'check_out' => '2025-09-12',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
