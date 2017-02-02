<?php

Route::group(['prefix'=>'publicaciones','middleware'=>'auth'], function(){
    Route::get('/','PublicacionController@index')
        ->name('publicacion.lista');
    Route::get('/nueva','PublicacionController@nueva')
        ->name('publicacion.nueva');
});