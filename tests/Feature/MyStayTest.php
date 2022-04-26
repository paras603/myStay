<?php

namespace Tests\Feature;

use App\Models\Homestay;
use App\Models\Merchant;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyStayTest extends TestCase
{
    use RefreshDatabase, WithFaker, DatabaseMigrations;

   public function test_user_can_login_successfully(){
       $login_data = [
            'email'         =>          'raiparasmani00@gmail.com',
           'password'       =>           'password',
       ];
       $this->ajaxPost(url('/login'),$login_data)->assertStatus(302);
   }

    public function test_normal_user_cannot_go_to_admin_dashboard(){
        $this->signInAsBasicUser();
        $this->get('/dashboard')->assertStatus(401);
    }

    public function test_admin_user_can_go_to_admin_dashboard(){
        $this->signAsAdmin();
        $this->get('/dashboard')->assertStatus(200);
    }

    public function test_admin_can_delete_merchant(){
        $this->signAsAdmin();
        $merchant_attributes = [
            'identity_front'            => 'citizenship.png',
            'identity_back'             => 'back.png',
            'merchant_image'            =>  'profile.png',
            'verified'                  => 'yes',
            'user_id'                   =>  4,
        ];
        $merchant = Merchant::create($merchant_attributes);
        $this->json('delete', url('/')."/dashboard/merchants/".$merchant->id)
            ->assertOk();
        $this->assertDatabaseMissing(Merchant::class, $merchant_attributes);
    }

    public function test_admin_can_delete_homestay(){
        $this->signAsAdmin();
        $homestay = [
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
        ];
        $_homestay = Homestay::create($homestay);
        $this->json('delete', url('/')."/dashboard/homestays/".$_homestay->id)
            ->assertOk();
        $this->assertDatabaseMissing(Merchant::class, $homestay);
    }
}
