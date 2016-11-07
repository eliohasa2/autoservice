<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_table', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('brand');
            $table->string('model');
            $table->string('desc');
            $table->string('year');
            $table->string('price');
            $table->string('km');
            $table->string('fueltype');
            $table->rememberToken();
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
        Schema::drop('cars_table');
    }
}
