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
<<<<<<< HEAD:database/migrations/2022_02_26_074459_create_homestays_table.php
            $table->string('hs_name');
            
            $table->string('hs_imgs');
            $table->longText('hs_services');
            $table->longText('nearby_places');
            $table->string('iframe');
=======
            $table->string('pan_number');
            $table->string('homestay_name');
            $table->string('homestay_address');
            $table->string('telephone');
            $table->string('registration_certificate');
            $table->unsignedBigInteger('merchant_id')->index();
            $table->foreign('merchant_id')->references('id')->on('merchants')->onDelete('cascade');
>>>>>>> f518584ab003a8163264bb5f2d8323a1f7850b81:database/migrations/2022_04_26_074459_create_homestays_table.php
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
