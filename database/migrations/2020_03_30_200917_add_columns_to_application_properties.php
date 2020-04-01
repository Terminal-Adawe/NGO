<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToApplicationProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_properties', function (Blueprint $table) {
            //
            $table->string('articles_image')->after('mainimage');
            $table->string('gallery_image')->after('articles_image');
            $table->string('aboutus_image')->after('gallery_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_properties', function (Blueprint $table) {
            //
        });
    }
}
