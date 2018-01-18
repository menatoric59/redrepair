<?php

Route::group(['prefix'=>'publicaciones'], function(){
    Route::get('/',function (){
        return view('publicaciones.ultimas');
    })->name('publicaciones.ultimas');
    Route::get('/cuadernos-de-trabajo',function (){
        return view('publicaciones.cuadernos');
    })->name('cuadernos');
    Route::get('/revista',function (){
        return view('publicaciones.revista');
    })->name('revista');
    Route::get('/publicaciones',function (){
        return view('publicaciones.publicaciones');
    })->name('publicaciones');
    Route::get('/libros',function (){
        return view('publicaciones.libros');
    })->name('libros');

    Route::get('/material-didactico',function (){
        return view('publicaciones.material');
    })->name('material');



    Route::group(['middleware'=>'auth'],function (){

        Route::get('/nueva','PublicacionController@nueva')
            ->name('publicacion.nueva');
        Route::post('/guardar','PublicacionController@guardar')
            ->name('publicacion.guardar');
        Route::get('/editar/{id}','PublicacionController@editar')
            ->name('publicacion.editar');
    });


});