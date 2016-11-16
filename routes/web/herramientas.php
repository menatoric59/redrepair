<?php
Route::group(['prefix'=>'herramientas'],function(){
	Route::get('/importar-estados','HerramientasController@importarEstados')->name('importar-estados');
	Route::post('/cargar-estados','HerramientasController@cargarEstados')->name('cargar-estados');

	Route::get('/importar-integrantes','HerramientasController@importarIntegrantes')->name('importar-integrantes');
	Route::post('/cargar-integrantes','HerramientasController@cargarIntegrantes')->name('cargar-integrantes');
});
	