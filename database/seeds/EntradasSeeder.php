<?php

use Illuminate\Database\Seeder;

class EntradasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entrada::class,10)->create();
        factory(\App\Entrada::class)->create([
            'nombre'=>'Eventos',
            'padre'=>'1',
            'plantilla'=>'2-columnas-01',
            'clase_color'=>'pink darken-3',
            'subtipo'=>'De la Red',
            'icono'=>'cubes'
        ]);
    }
}
