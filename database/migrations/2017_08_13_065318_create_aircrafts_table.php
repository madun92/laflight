<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAircraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircrafts', function (Blueprint $table){
            $table->increments('id');
            $table->integer('airline_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('aircraft');
            $table->integer('cabin_baggage')->nullable();
            $table->integer('baggage')->nullable();
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
        Schema::dropIfExists('aircrafts');
    }
}
