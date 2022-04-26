<?php

namespace Database\Seeders;

use App\Models\Homestay;
use Illuminate\Database\Seeder;

class HomestaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homestay::upsert([
            [
                'id'                        =>  1,
                'pan_number'                => '123456',
                'homestay_name'             => 'sudip homestay',
                'homestay_address'          => 'pokhara',
                'telephone'                 => '9876543210',
                'registration_certificate'  => 'sample.png',
                'rating'                    => 4,
                'slogan'                    => 'feel like home',
                'services'                  => 'jungle safari',
                'nearby_places'             => 'dharan',
                'iframe'                    => 'comming soon',
                'description'               => 'Homestays provide a truly affordable and safe way to stay, when learning a new language, studying abroad on Erasmus or doing an internship. Our secure online booking system, complete with reviews gives you peace of mind that your accommodation is now sorted.',
                'merchant_id'               => 1,
                'created_at'                => now(),
            ],
            [
                'id'                        =>  2,
                'pan_number'                => '123456',
                'homestay_name'             => 'hamro homestay',
                'homestay_address'          => 'ithari',
                'telephone'                 => '9876543210',
                'registration_certificate'  => 'sample.png',
                'rating'                    => 3,
                'slogan'                    => 'feel like home',
                'services'                  => 'jungle safari',
                'nearby_places'             => 'dhakoshi tapu',
                'iframe'                    => 'comming soon',
                'description'               => 'Homestays provide a truly affordable and safe way to stay, when learning a new language, studying abroad on Erasmus or doing an internship. Our secure online booking system, complete with reviews gives you peace of mind that your accommodation is now sorted.',
                'merchant_id'               => 2,
                'created_at'                => now(),
            ],
            [
                'id'                        =>  3,
                'pan_number'                => '123456',
                'homestay_name'             => 'timro homestay',
                'homestay_address'          => 'dharan',
                'telephone'                 => '9876543210',
                'registration_certificate'  => 'sample.png',
                'rating'                    => 5,
                'slogan'                    => 'feel like home',
                'services'                  => 'jungle safari',
                'nearby_places'             => 'dharan',
                'iframe'                    => 'comming soon',
                'description'               => 'Homestays provide a truly affordable and safe way to stay, when learning a new language, studying abroad on Erasmus or doing an internship. Our secure online booking system, complete with reviews gives you peace of mind that your accommodation is now sorted.',
                'merchant_id'               => 3,
                'created_at'                => now(),
            ],
            [
                'id'                        =>  4,
                'pan_number'                => '123dsf456',
                'homestay_name'             => 'bhaktapur homestay',
                'homestay_address'          => 'bhaktapur',
                'telephone'                 => '9876543210',
                'registration_certificate'  => 'sample.png',
                'rating'                    => 4,
                'slogan'                    => 'feel like home',
                'services'                  => 'jungle safari',
                'nearby_places'             => 'dharan',
                'iframe'                    => 'comming soon',
                'description'               => 'Homestays provide a truly affordable and safe way to stay, when learning a new language, studying abroad on Erasmus or doing an internship. Our secure online booking system, complete with reviews gives you peace of mind that your accommodation is now sorted.',
                'merchant_id'               => 4,
                'created_at'                => now(),
            ],
            [
                'id'                        =>  5,
                'pan_number'                => '123dsf456',
                'homestay_name'             => 'ghandruk homestay',
                'homestay_address'          => 'ghandruk',
                'telephone'                 => '9876543210',
                'registration_certificate'  => 'sample.png',
                'rating'                    => 2,
                'slogan'                    => 'feel like home',
                'services'                  => 'jungle safari',
                'nearby_places'             => 'dharan',
                'iframe'                    => 'comming soon',
                'description'               => 'Homestays provide a truly affordable and safe way to stay, when learning a new language, studying abroad on Erasmus or doing an internship. Our secure online booking system, complete with reviews gives you peace of mind that your accommodation is now sorted.',
                'merchant_id'               => 5,
                'created_at'                => now(),
            ],
         ],[],[]);
    }
}
