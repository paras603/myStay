<?php

namespace Database\Seeders;

use App\Models\HomestayImage;
use Illuminate\Database\Seeder;

class HomestayImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomestayImage::upsert([
            [
                'id'               =>  1,
                'image'            => 'homestay1.jpg',
                'homestay_id'      => 1,
                'created_at'       => now(),
            ],
            [
                'id'               =>  2,
                'image'            => 'homestay2.jpg',
                'homestay_id'      => 1,
                'created_at'       => now(),
            ],
            [
                'id'               =>  3,
                'image'            => 'homestay3.jpg',
                'homestay_id'      => 2,
                'created_at'       => now(),
            ],
            [
                'id'               =>  4,
                'image'            => 'homestay4.jpg',
                'homestay_id'      => 2,
                'created_at'       => now(),
            ],
            [
                'id'               =>  5,
                'image'            => 'homestay5.jpg',
                'homestay_id'      => 3,
                'created_at'       => now(),
            ],            
         ],[],[]);
    }
}
