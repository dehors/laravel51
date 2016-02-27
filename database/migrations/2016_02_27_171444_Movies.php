<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            /*
            | En el video tutorial olvide agregar el Path de las imagenes xD
            */
            $table->string('path');
            $table->string('cast');
            $table->string('direction');
            $table->string('duration');
            $table->timestamps();
            $table->integer('genders_id')->unsigned();
            $table->foreign('genders_id')->references('id')->on('genders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
