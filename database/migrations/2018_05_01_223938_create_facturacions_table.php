<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('n_factura', 6);
            $table->date('fecha', 6);
            $table->time('tiempo', 6);
            $table->date('Valor_total', 100);
            $table->integer('vehiculos_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('prestamos_id')->unsigned();
            $table->timestamps();
            $table->foreign('vehiculos_id')->references('id')->on('vehiculos');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('prestamos_id')->references('id')->on('prestamos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facturacions');
    }
}
