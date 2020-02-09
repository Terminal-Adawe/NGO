<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('donate_money_phrase');
            $table->text('be_volunteer_phrase');
            $table->text('causes_phrase');
            $table->text('our_mission');
            $table->text('our_vision');
            $table->text('about_us');
            $table->string('mainimage');
            $table->string('logo');
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
        Schema::dropIfExists('application_properties');
    }
}
