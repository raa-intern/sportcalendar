<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->primaryKey();
            $table->string('name');
            $table->string('description');
            $table->string('image_intro');
            $table->string('image_full');
            $table->string('alt_intro')->nullable();
            $table->string('alt_full')->nullable();
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->integer('rating');
            $table->string('event_status');
            $table->string('url');
            $table->string('sourse');
            $table->integer('category_id');
            $table->string('geo_point');
            $table->string('city');
            $table->string('street');
            $table->string('build_number');
            $table->datetime('start_date');
            $table->datetime('finish_date');
            $table->string('event_link');
            $table->string('registration_date');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
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
        Schema::dropIfExists('events');
    }
}
