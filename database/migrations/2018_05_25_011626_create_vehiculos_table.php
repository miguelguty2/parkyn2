<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('placa', 6);
            $table->time('hora_ini', 6);
            $table->date('fecha', 8);
            $table->integer('puestos_id')->unsigned();
            $table->timestamps();
            $table->foreign('puestos_id')->references('id')->on('puestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehiculos');
    }
}
