<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
           $table->increments('id_venta');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('servida');
            $table->integer('confirmada');

            $table->integer('id_cliente')->unsigned();
              $table->foreign('id_cliente')->references('id_cliente')->on('clientes');

              $table->integer('id_mesa')->unsigned();
              $table->foreign('id_mesa')->references('id_mesa')->on('mesas');

              $table->integer('id_empleado')->unsigned();
              $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
