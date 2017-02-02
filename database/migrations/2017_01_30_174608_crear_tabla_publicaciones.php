<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function(Blueprint $table){
            $table->increments('id');
            $table->string('titulo');
            $table->integer('tipo_publicacion')->unsigned();
            $table->string('publicado_en');
            $table->integer('anio');
            $table->string('ciudad');
            $table->string('editorial');
            $table->string('url');
            $table->string('sinopsis_html');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('publicaciones');
    }
}
