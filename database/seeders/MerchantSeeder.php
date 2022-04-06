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
                'user_id'                   =>  3,
                'created_at'                => now(),
            ],
            [
                'id'                        =>  2,
                'identity_front'            => 'screenshot_2021_12_22_113919_20220406032019.png',
                'identity_back'             => 'screenshot_2021_12_22_113919_20220406032019.png',
                'merchant_image'            =>  'screenshot_2021_12_22_113919_20220406032019.png',
                'verified'                  => 'no',
                'user_id'                   =>  4,
                'created_at'                => now(),
            ],
        ],[''],[]);
    }
}
