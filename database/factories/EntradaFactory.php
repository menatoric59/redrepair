<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Entrada::class, function (Faker\Generator $faker) {
    return [
        'nombre'=>$faker->name,
        'slug'=>$faker->slug,
        'descripcion_html'=>$faker->words(15,true),
        'tipo'=>'eventos',
        'subtipo'=>'de-la-red',
        'visible_publico'=>1,
        'liga_ver_mas'=>$faker->url,
        'texto_ver_mas'=>$faker->word,
        'inicio_evento'=>date('Y-m-d'),
        'fin_evento'=>date('Y-m-d'),
        'inicio_visible'=>date('Y-m-d'),
        'fin_visible'=>date('Y-m-d'),
    ];
});
