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
                'identity_front'            => 'sfsfsf.jpg',
                'identity_back'             => 'sfsfsf.png',
                'merchant_image'            =>  'sfsfsf.jpg',
                'verified'                  => 'sanjeevvsanjeev1@gmail.com',
                'user_id'                   =>  1,
                'created_at'                => now(),
            ],
            [
                'id'                        =>  1,
                'identity_front'            => 'sfsfsf.jpg',
                'identity_back'             => 'sfsfsf.png',
                'merchant_image'            =>  'sfsfsf.jpg',
                'verified'                  => 'sanjeevvsanjeev1@gmail.com',
                'user_id'                   =>  2,
                'created_at'                => now(),
            ],
        ],[''],[]);
    }
}
