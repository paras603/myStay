~<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('pan_number');
            $table->enum('verified', ['yes', 'no'])->default('no');
            $table->string('pp_image');
            $table->string('identity_front');
            $table->string('identity_back');
            $table->string('homestay_name');
            $table->string('homestay_address');
            $table->string('homestay_telephone');
            $table->string('registration_certificate');
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('merchants');
    }
}
