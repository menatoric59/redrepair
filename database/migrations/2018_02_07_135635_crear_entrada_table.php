<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas',function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->boolean('padre')->default(0);
            $table->string('slug')->nullable();
            $table->longText('descripcion_html');
            $table->integer('columnas')->default(6);
            $table->string('plantilla')->nullable();
            $table->string('clase_color')->nullable();
            $table->string('icono')->nullable();
            $table->string('tipo');
            $table->string('subtipo');
            $table->boolean('visible_publico');
            $table->string('liga_ver_mas');
            $table->string('texto_ver_mas');
            $table->date('inicio_evento');
            $table->date('fin_evento');
            $table->date('inicio_visible');
            $table->date('fin_visible');
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
        Schema::dropIfExists('entradas');
    }
}
