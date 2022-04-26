<?php

namespace Database\Seeders;

use App\Models\Merchant;
use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merchant::upsert([
           [
               'id'                        =>  1,
               'identity_front'            => 'citizenship.png',
               'identity_back'             => 'back.png',
               'merchant_image'            =>  'profile.png',
               'verified'                  => 'yes',
               'user_id'                   =>  4,
               'created_at'                => now(),
           ],
           [
               'id'                        =>  2,
               'identity_front'            => 'citizenship.png',
               'identity_back'             => 'back.png',
               'merchant_image'            =>  'profile.png',
               'verified'                  => 'yes',
               'user_id'                   =>  5,
               'created_at'                => now(),
           ],
           [
            'id'                        =>  3,
            'identity_front'            => 'citizenship.png',
            'identity_back'             => 'back.png',
            'merchant_image'            =>  'profile.png',
            'verified'                  => 'yes',
            'user_id'                   =>  6,
            'created_at'                => now(),
            ],
            [
            'id'                        =>  4,
            'identity_front'            => 'citizenship.png',
            'identity_back'             => 'back.png',
            'merchant_image'            =>  'profile.png',
            'verified'                  => 'yes',
            'user_id'                   =>  7,
            'created_at'                => now(),
            ],
            [
                'id'                        =>  5,
                'identity_front'            => 'citizenship.png',
                'identity_back'             => 'back.png',
                'merchant_image'            =>  'profile.png',
                'verified'                  => 'yes',
                'user_id'                   =>  8,
                'created_at'                => now(),
                ],
        ],[],[]);
    }
}
