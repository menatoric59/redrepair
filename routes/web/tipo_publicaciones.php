<?php
Route::group(['prefix'=>'tipo-publicaciones','middleware'=>'auth'],function(){
	Route::get('/','TipoPublicacionController@index')
		->name('tipo-publicacion.lista');
    Route::get('/nueva','TipoPublicacionController@nueva')
        ->name('tipo-publicacion.nueva');
    Route::get('/editar/{id}','TipoPublicacionController@editar')
        ->name('tipo-publicacion.editar');
    Route::put('/actualizar/{id}','TipoPublicacionController@actualizar')
        ->name('tipo-publicacion.actualizar');
    Route::post('/guardar','TipoPublicacionController@guardar')
        ->name('tipo-publicacion.guardar');
});
