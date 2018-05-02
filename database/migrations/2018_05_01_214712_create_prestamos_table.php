<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrestamosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Valor_hora', 100);
            $table->date('fecha', 8);
            $table->time('Hora_Inicial', 6);
            $table->time('Hora_Fin', 6);
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
        Schema::drop('prestamos');
    }
}
