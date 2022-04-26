<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::upsert([
            [
                'id'                     =>  1,
                'feature_image'          => 'homestay1.jpg',
                'homestay_id'            => '1',
                'expiry_date'            => '2023-04-12',
                'created_at'             => now(),
            ],
            [
                'id'                     =>  2,
                'feature_image'          => 'homestay2.jpg',
                'homestay_id'            => '2',
                'expiry_date'            => '2023-04-12',
                'created_at'             => now(),
            ],
            [
                'id'                     =>  3,
                'feature_image'          => 'homestay3.jpg',
                'homestay_id'            => '3',
                'expiry_date'            => '2023-04-12',
                'created_at'             => now(),
            ],
            [
                'id'                     =>  4,
                'feature_image'          => 'homestay4.jpg',
                'homestay_id'            => '4',
                'expiry_date'            => '2023-04-12',
                'created_at'             => now(),
            ],
         ],[],[]);
    }
}
