<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('about');
            $table->string('company_image');
            $table->string('company_location');
            $table->string('phone_number');
            $table->string('email');
            $table->string('company_name');
            $table->text('company_mission');
            $table->text('company_vision');
            $table->string('facebook')->nullable;
            $table->string('twitter')->nullable;
            $table->string('linkedin')->nullable;
            $table->string('youtube')->nullable;
            $table->string('instagram')->nullable;

            $table->string('cv')->nullable;
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
        Schema::dropIfExists('settings');
    }
}
