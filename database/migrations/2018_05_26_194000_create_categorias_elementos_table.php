<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriasElementosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_elementos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categorias_id')->unsigned();
            $table->integer('elementos_id')->unsigned();
            $table->timestamps();
            $table->foreign('categorias_id')->references('id')->on('categorias');
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
        Schema::drop('categorias_elementos');
    }
}
