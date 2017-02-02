<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();
require __DIR__ . '/web/integrantes.php';
require __DIR__ . '/web/herramientas.php';
require __DIR__ . '/web/cuadernos.php';
require __DIR__ . '/web/tipo_publicaciones.php';
require __DIR__ . '/web/publicaciones.php';
Route::get('/home', 'HomeController@index')->name('home');
