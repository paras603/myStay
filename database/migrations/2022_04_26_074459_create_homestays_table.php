<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomestaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestays', function (Blueprint $table) {
            $table->id();
            
            
            
            $table->string('pan_number');
            $table->string('homestay_name');
            $table->string('homestay_address');
            $table->string('telephone');
            $table->string('registration_certificate');

            $table->longText('slogan')->nullable();
            $table->string('hs_imgs')->nullable();
            $table->longText('hs_services')->nullable();
            $table->longText('nearby_places')->nullable();
            $table->string('iframe')->nullable();
            $table->longText('description')->nullable();

            $table->unsignedBigInteger('merchant_id')->index();
            $table->foreign('merchant_id')->references('id')->on('merchants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homestays');
    }
}
