<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
             $table->increments('id_empleado');
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('puesto');
            $table->integer('telefono');
            $table->string('email');
            $table->string('rfc');
            $table->string('calle');
            $table->integer('numero');
            $table->string('colonia');
            $table->string('estado');
             $table->integer('cp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }
}
