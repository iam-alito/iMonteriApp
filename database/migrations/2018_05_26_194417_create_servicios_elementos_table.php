<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiciosElementosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_elementos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('servicios_id')->unsigned();
            $table->integer('elementos_id')->unsigned();
            $table->timestamps();
            $table->foreign('servicios_id')->references('id')->on('servicios');
            $table->foreign('elementos_id')->references('id')->on('elementos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servicios_elementos');
    }
}
