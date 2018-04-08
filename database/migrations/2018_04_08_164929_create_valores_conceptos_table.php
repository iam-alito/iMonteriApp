<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateValoresConceptosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valores_conceptos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('concepto_id')->unsigned();
            $table->integer('valor');
            $table->integer('users_id')->unsigned();
            $table->timestamps();
            $table->foreign('concepto_id')->references('id')->on('conceptos');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('valores_conceptos');
    }
}
