<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('segundo_nombre');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('idiomas');
            $table->string('zona_horaria');
            $table->string('quien_soy');
            $table->string('historia_laboral');
            $table->string('certificaciones');
            $table->string('portafolio');
            $table->string('direccion_postal');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('codigo_postal');
            $table->string('pais');
            $table->string('telefono');
            $table->string('celular');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
