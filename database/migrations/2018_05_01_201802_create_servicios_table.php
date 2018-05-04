<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiciosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_servicios_id')->unsigned();
            $table->char('descripcion', 100);
            $table->char('valor', 6);
            $table->char('icono', 250);
            $table->timestamps();
            $table->foreign('tipo_servicios_id')->references('id')->on('tipo_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servicios');
    }
}
