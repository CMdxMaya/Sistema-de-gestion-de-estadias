<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
 $table->increments('id_producto');
             $table->integer('id_tipodeproducto')->unsigned();
              $table->foreign('id_tipodeproducto')->references('id_tipodeproducto')->on('tipodeproductos');
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
        Schema::drop('productos');
    }
}
