<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('offer_title')->nullable();
            $table->string('title_1')->nullable();
            $table->string('sub_title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('sub_title_2')->nullable();
            $table->string('title_3')->nullable();
            $table->string('sub_title_3')->nullable();
            $table->string('title_4')->nullable();
            $table->string('sub_title_4')->nullable();
            $table->string('title_5')->nullable();
            $table->string('sub_title_5')->nullable();
            $table->string('title_6')->nullable();
            $table->string('title_7')->nullable();
            $table->string('sub_title_7')->nullable();
            $table->string('title_8')->nullable();
            $table->string('sub_title_8')->nullable();
            $table->string('title_9')->nullable();
            $table->string('sub_title_9')->nullable();
            $table->string('title_10')->nullable();
            $table->string('sub_title_10')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
