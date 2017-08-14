<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table){
            $table->increments('id');
            $table->integer('aircraft_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->integer('price')->nullable();
            $table->integer('qty')->nullable();
            $table->enum('class',['Bussiness','Economy'])->nullable();
            // $table->integer('airline_id')->unsigned()->nullable();
            $table->timestamp('depart')->nullable();
            $table->timestamp('arrive')->nullable();
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
        Schema::dropIfExists('flights');
    }
}
