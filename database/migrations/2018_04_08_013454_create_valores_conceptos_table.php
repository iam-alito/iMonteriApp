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
            $table->integer('conceptos_id')->unsigned();
            $table->integer('valor');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('conceptos_id')->references('id')->on('conceptos');
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
