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
                'start_date'             => '2022-04-13',
                'end_date'               => '2022-04-12',
                'total'                  => 800,
                'room_id'                => 1,
                'user_id'                => 7,
                'created_at'             => now(),
            ],
            [
                'id'                     =>  2,
                'transaction_id'         => '12324',
                'start_date'             => '2022-04-13',
                'end_date'               => '2022-04-12',
                'total'                  => 600,
                'room_id'                => 2,
                'user_id'                => 7,
                'created_at'             => now(),
            ],        
            [
                'id'                     =>  3,
                'transaction_id'         => '32479',
                'start_date'             => '2022-04-13',
                'end_date'               => '2022-04-12',
                'total'                  => 400,
                'room_id'                => 3,
                'user_id'                => 7,
                'created_at'             => now(),
            ], 
            
         ],[],[]);
    }
}
