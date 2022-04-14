<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Room;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::upsert([
            [
                'id'               =>  1,
                'type'             => 'premium',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 100,
                'status'           => 'active',
                'homestay_id'      => 1,
                'created_at'       => now(),
            ],
            [
                'id'               =>  2,
                'type'             => 'normal',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 100,
                'status'           => 'active',
                'homestay_id'      => 1,
                'created_at'       => now(),
            ],
            [
                'id'               =>  3,
                'type'             => 'standard',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 100,
                'status'           => 'active',
                'homestay_id'      => 1,
                'created_at'       => now(),
            ],
         ],[],[]);
    }
}
