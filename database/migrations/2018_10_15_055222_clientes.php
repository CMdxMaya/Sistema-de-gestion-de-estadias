<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
             $table->increments('id_cliente');
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->integer('telefono');
            $table->string('email');
            $table->string('rfc');
            $table->string('calle');
            $table->integer('numero');
            $table->string('colonia');
            $table->integer('c_p');
            $table->string('estado');
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
        Schema::drop('clientes');
    }
}
