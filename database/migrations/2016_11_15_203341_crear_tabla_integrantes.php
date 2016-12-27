<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIntegrantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrantes',function(Blueprint $table){
            $table->increments('id');
            $table->integer('orden');
            $table->string('nombre');
            $table->string('institucion');
            $table->string('dependencia');
            $table->string('pais');
            $table->string('estado');
            $table->string('disciplina');
            $table->string('sni');
            $table->string('participacion');
            $table->string('correo')->unique();
            $table->longText('detalle')->nullable();
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
        Schema::drop('integrantes');
    }
}
