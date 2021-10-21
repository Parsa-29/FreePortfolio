<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maininfo', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('short_about');
            $table->string('fb_link');
            $table->string('intsa_link');
            $table->string('twitter_link');
            $table->string('tiktok_link');
            $table->string('behance_link');
            $table->string('proffesion');
            $table->string('long_about');
            $table->string('birthday');
            $table->integer('age');
            $table->string('address');
            $table->string('email');
            $table->integer('phone');
            $table->string('study');
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
        Schema::dropIfExists('maininfo');
    }
}
