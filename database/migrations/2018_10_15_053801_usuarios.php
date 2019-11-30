<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
           $table->increments('id_usuario');
            $table->string('login');
            $table->string('password');
          $table->string('tipo_de_usuario');


              $table->integer('id_empleado')->unsigned();
              $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
