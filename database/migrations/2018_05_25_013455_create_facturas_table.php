<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('numero_factura', 10);
            $table->char('tiempo', 10);
            $table->time('hora_final', 6);
            $table->char('total_pagar', 10);
            $table->integer('vehiculos_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->timestamps();
            $table->foreign('vehiculos_id')->references('id')->on('vehiculos');
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
        Schema::drop('facturas');
    }
}
