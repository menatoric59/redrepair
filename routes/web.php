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

Route::get('/prueba','HomeController@prueba');

Auth::routes();
require __DIR__ . '/web/integrantes.php';
require __DIR__ . '/web/herramientas.php';
require __DIR__ . '/web/cuadernos.php';
require __DIR__ . '/web/formacion.php';
require __DIR__ . '/web/tipo_publicaciones.php';
require __DIR__ . '/web/publicaciones.php';
require __DIR__ . '/web/dashboard.php';

Route::get('/', 'HomeController@index')->name('home');
/*
Route::get('/',function (){
   return 'Hola';
});
*/
Route::get('/register',function(){
    return redirect()->route('home');
});
Route::get('/password/reset',function(){
    return redirect()->route('home');
});






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
    Route::post('/contacto','ContactoController@enviar')->name('contacto.enviar');
});


Route::group(['prefix'=>'avisos'],function (){
   Route::get('/','AvisoController@lista')->name('avisos');
   Route::group(['middleware'=>'auth'],function(){
       Route::get('/nuevo','AvisoController@nuevo')->name('avisos.nuevo');
       Route::post('/guardar','AvisoController@guardar')->name('avisos.guardar');
       Route::get('/editar/{id}','AvisoController@editar')->name('avisos.editar');
       Route::put('/actualizar/{id}','AvisoController@actualizar')->name('avisos.actualizar');
    });
});

Route::group(['prefix'=>'reuniones'],function (){
    Route::get('/','ReunionController@lista')->name('reuniones');
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/nuevo','ReunionController@nuevo')->name('reuniones.nuevo');
        Route::post('/guardar','ReunionController@guardar')->name('reuniones.guardar');
        Route::get('/editar/{id}','ReunionController@editar')->name('reuniones.editar');
        Route::put('/actualizar/{id}','ReunionController@actualizar')->name('reuniones.actualizar');
    });
});

Route::get('social/{provider?}', 'SocialController@getSocialAuth')->name('social');
Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');
/*
Route::get('/login',function (){
    dd( $_ENV );
});
*/


Route::group(['prefix'=>'{tipo}/{subtipo}'],function (){
    Route::get('/','EntradaController@index')->name('entradas');
    Route::get('/{id}/editar','EntradaController@editar')->name('entradas.editar');
    Route::put('/{id}','EntradaController@actualizar')->name('entradas.actualizar');
    Route::get('/nueva','EntradaController@nueva')->name('entradas.nueva');
    Route::post('/guardar','EntradaController@guardar')->name('entradas.guardar');
});
