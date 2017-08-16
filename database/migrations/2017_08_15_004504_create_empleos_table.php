<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
             $table->increments('id');
             $table->string('primer_nombre');
             $table->string('segundo_nombre');
             $table->string('apellidos');
             $table->string('email')->unique();
             $table->string('cargo_que_busca');
             $table->string('salario_minimo');
             $table->string('fecha_nacimiento');
             $table->string('prefijo_cedula');
             $table->string('cedula_pasaporte');
             $table->string('rif_nit_iss');
             $table->string('telefono_residencia');
             $table->string('prefijo_movil');
             $table->string('telefono_movil');
             $table->string('prefijo_oficina');
             $table->string('telefono_oficina');
             $table->string('pais');
             $table->string('estado');
             $table->string('ciudad');
             $table->enum('estado_civil', ['casado','viudo','union','separado']);
             $table->enum('genero', ['hombre','mujer']);
             $table->string('profesion');
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
        Schema::dropIfExists('empleos');
    }
}
