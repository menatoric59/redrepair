<?php
Route::group(['prefix'=>'integrantes'],function(){
	Route::get('/','IntegranteController@index')->name('integrantes.lista');
	Route::get('/mapa','IntegranteController@mapa')->name('integrantes.mapa');
	Route::get('/json','IntegranteController@json')->name('integrantes.json');
	Route::get('/seleccionar', 'HomeController@seleccionarArchivoDirectorio')->name('directorio.seleccionar');
});

Route::post('/d', 'HomeController@almacenarDirectorio')->name('directorio.almacenar');
