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

Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix'=>'/sobre-la-red'],function (){
    Route::get('/quienes-somos',function (){
        return view('sobre.quienes-somos');
    })->name('quienes-somos');
    Route::get('/historia',function (){
        return view('sobre.historia');
    })->name('historia');
    Route::get('/que-hacemos',function (){
        return view('sobre.que-hacemos');
    })->name('que-hacemos');
    Route::get('/contacto',function (){
        return view('sobre.contacto');
    })->name('contacto');
});