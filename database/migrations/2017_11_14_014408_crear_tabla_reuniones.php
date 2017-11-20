<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaReuniones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reuniones',function (Blueprint $table){
            $table->increments('id');
            $table->string('titulo');
            $table->mediumText('descripcion');
            $table->string('lugar');
            $table->string('galeria_instagram');
            $table->date('inicio');
            $table->date('fin');
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
        Schema::drop('reuniones');
    }
}
