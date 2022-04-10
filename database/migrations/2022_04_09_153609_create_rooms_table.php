<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['normal', 'standard', 'premium'])->default('normal');
            $table->string('image');
            $table->longText('description');
            $table->float('price');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('homestay_id');
            $table->foreign('homestay_id')->references('id')->on('homestays')->onDelete('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
