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
                'iframe'                    => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.912070529784!2d83.9512803296272!3d28.209983954145113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951e41a66175%3A0xd3352b1ffb948f76!2sBusy%20Bee%20Cafe!5e0!3m2!1sen!2snp!4v1654669910071!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description'               => 'Homestays provide a truly affordable and safe way to stay, when learning a new language, studying abroad on Erasmus or doing an internship. Our secure online booking system, complete with reviews gives you peace of mind that your accommodation is now sorted.',
                'merchant_id'               => 1,
                'created_at'                => now(),
            ],
            [
                'id'                        =>  2,
                'pan_number'                => '123456',
                'homestay_name'             => 'hamro homestay',
                'homestay_address'          => 'itahari',
                'telephone'                 => '9876543210',
                'registration_certificate'  => 'sample.png',
                'rating'                    => 3,
                'slogan'                    => 'feel like home',
                'services'                  => 'jungle safari',
                'nearby_places'             => 'dhakoshi tapu',
                'iframe'                    => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.511183694842!2d87.27302326538306!3d26.664129027165433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6c706efb09bd%3A0xf29cad8eca178730!2sElite%20Cinema%20Hall!5e0!3m2!1sen!2snp!4v1654669969139!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
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
                'iframe'                    => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28479.64597828719!2d87.27593584850385!3d26.841359782746075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef41adcd266c77%3A0x39cb5cde1f1849c6!2sB.P.%20Koirala%20Institute%20of%20Health%20Sciences!5e0!3m2!1sen!2snp!4v1654670014157!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
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
                'iframe'                    => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.4630735485152!2d85.42591361539758!3d27.672079133647145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aafec32df31%3A0xdda339e731af9bfd!2sBhaktapur%20Durbar%20Square!5e0!3m2!1sen!2snp!4v1654670072367!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
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
                'iframe'                    => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56146.31696813869!2d83.79102350742797!3d28.414887012306455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995f1b3be2f542d%3A0xe7736135b0e1cd77!2sAshish%20Aama%20Homestay!5e0!3m2!1sen!2snp!4v1654670125117!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description'               => 'Homestays provide a truly affordable and safe way to stay, when learning a new language, studying abroad on Erasmus or doing an internship. Our secure online booking system, complete with reviews gives you peace of mind that your accommodation is now sorted.',
                'merchant_id'               => 5,
                'created_at'                => now(),
            ],
         ],[],[]);
    }
}
