<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->increments('id_detalle_ventas');

                         $table->string('fecha');
                                      $table->string('hora');




              $table->integer('id_venta')->unsigned();
              $table->foreign('id_venta')->references('id_venta')->on('ventas');

               $table->integer('id_producto')->unsigned();
              $table->foreign('id_producto')->references('id_producto')->on('productos');
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
        Schema::drop('detalle_ventas');
    }
}
