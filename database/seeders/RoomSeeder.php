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
                'description'      => 'aau hai basum',
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
                'price'            => 50,
                'status'           => 'active',
                'homestay_id'      => 1,
                'created_at'       => now(),
            ],
            [
                'id'               =>  3,
                'type'             => 'standard',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 130,
                'status'           => 'active',
                'homestay_id'      => 2,
                'created_at'       => now(),
            ],
            [
                'id'               =>  4,
                'type'             => 'normal',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 70,
                'status'           => 'active',
                'homestay_id'      => 2,
                'created_at'       => now(),
            ],
            [
                'id'               =>  5,
                'type'             => 'normal',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 100,
                'status'           => 'active',
                'homestay_id'      => 3,
                'created_at'       => now(),
            ],
            [
                'id'               =>  6,
                'type'             => 'standard',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 170,
                'status'           => 'active',
                'homestay_id'      => 3,
                'created_at'       => now(),
            ],
            [
                'id'               =>  7,
                'type'             => 'normal',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 100,
                'status'           => 'active',
                'homestay_id'      => 4,
                'created_at'       => now(),
            ],
            [
                'id'               =>  8,
                'type'             => 'standard',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 170,
                'status'           => 'active',
                'homestay_id'      => 4,
                'created_at'       => now(),
            ],
            [
                'id'               =>  9,
                'type'             => 'normal',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 100,
                'status'           => 'active',
                'homestay_id'      => 5,
                'created_at'       => now(),
            ],
            [
                'id'               =>  10,
                'type'             => 'standard',
                'image'            => 'homestay1.jpg',
                'description'      => 'comming soon',
                'price'            => 170,
                'status'           => 'active',
                'homestay_id'      => 5,
                'created_at'       => now(),
            ],

         ],[],[]);
    }
}
