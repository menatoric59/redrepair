<?php

use Illuminate\Database\Seeder;

class TipoPublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Árticulos en Memorias'
        ]);
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Árticulos en revistas'
        ]);
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Capitulo en libros'
        ]);
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Libros digitalizados'
        ]);
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Revistas'
        ]);
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Otros'
        ]);
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Material didáctico'
        ]);
        DB::table('tipo_publicacion')->insert([
            'nombre'=>'Cuadernos de trabajo'
        ]);
    }
}
