<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'guest_id' => 6,
                'room_id' => 1,
                'service_id' => null,
                'check_in' => '2025-01-01',
                'check_out' => '2025-01-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 6,
                'room_id' => 1,
                'service_id' => null,
                'check_in' => '2025-06-01',
                'check_out' => '2025-06-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-02-09',
                'check_out' => '2025-02-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-04-09',
                'check_out' => '2025-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-07-09',
                'check_out' => '2025-07-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-012-09',
                'check_out' => '2025-12-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-10-09',
                'check_out' => '2025-10-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-10-09',
                'check_out' => '2025-10-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-04-09',
                'check_out' => '2025-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 8,
                'room_id' => 3,
                'service_id' => null,
                'check_in' => '2025-08-20',
                'check_out' => '2025-08-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 7,
                'room_id' => 2,
                'service_id' => 2,
                'check_in' => '2025-03-09',
                'check_out' => '2025-03-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'guest_id' => 8,
                'room_id' => 3,
                'service_id' => null,
                'check_in' => '2025-12-20',
                'check_out' => '2025-12-23',
                'created_at' => now(),
                'updated_at' => now(),
            ]
           
        ]);
    }
}
