<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos',function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('carrera',100);
            $table->string('semestre',100);
            $table->string('practicante',100);
            $table->string('empresa',100);
            $table->string('direccion',100);
            $table->integer('telefono');
            $table->string('nombre_tutor',100);
            $table->string('cargo',100);
            $table->string('area_asignada',100);
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
        Schema::drop('alumnos');
    }
}
