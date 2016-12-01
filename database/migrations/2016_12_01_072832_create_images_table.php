<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    Schema::create('images_table', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('on_car')->unsigned()->default(0);
            $table->foreign('on_car')
            ->references('id')->on('cars_table')
            ->onDelete('cascade');
            $table->string('url');
           
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
        Schema::drop('images_table');
    }
}
