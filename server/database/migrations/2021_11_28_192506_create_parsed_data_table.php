<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParsedDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parsed_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parse_event_name')->nullable();
            $table->string('parse_event_type')->nullable();
            $table->string('parse_event_category')->nullable();
            $table->text('parse_event_description')->nullable();
            $table->string('parse_event_link')->nullable();
            $table->string('parse_geo_point')->nullable();
            $table->string('parse_city')->nullable();
            $table->string('parse_street')->nullable();
            $table->string('parse_build_number')->nullable();
            $table->string('parse_event_photo')->nullable();
            $table->string('parse_source')->nullable();
            $table->dateTime('parse_registration_date')->nullable();
            $table->dateTime('parse_start_date');
            $table->dateTime('parse_finish_date');
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
        Schema::dropIfExists('parsed_data');
    }
}
