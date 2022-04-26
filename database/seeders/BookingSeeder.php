<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::upsert([
            [
                'id'                     =>  1,
                'transaction_id'         => '123456',
                'start_date'             => '2022-04-11',
                'end_date'               => '2022-04-12',
                'total'                  => 800,
                'room_id'                => 1,
                'user_id'                => 9,
                'created_at'             => now(),
            ],
            [
                'id'                     =>  2,
                'transaction_id'         => '12324',
                'start_date'             => '2022-04-11',
                'end_date'               => '2022-04-12',
                'total'                  => 600,
                'room_id'                => 7,
                'user_id'                => 10,
                'created_at'             => now(),
            ],   
            
         ],[],[]);
    }
}
