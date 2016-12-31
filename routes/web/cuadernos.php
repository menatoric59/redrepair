<?php
Route::group(['prefix'=>'cuadernos'],function(){
	/*
	Route::get('/','IntegranteController@index')
		->name('integrantes.lista');
	Route::get('/perfil/{id}','IntegranteController@perfil')
		->name('integrante.perfil');
	Route::get('/mapa','IntegranteController@mapa')
		->name('integrantes.mapa');
	Route::get('/json','IntegranteController@json')
		->name('integrantes.json');
	Route::get('/jsonTipoIntegrante','IntegranteController@jsonTipoIntegrante')
		->name('integrantes.jsonTipoIntegrante');
	Route::get('/jsonTipoAdscripcion','IntegranteController@jsonTipoAdscripcion')
		->name('integrantes.jsonTipoAdscripcion');
	Route::get('/seleccionar', 'HomeController@seleccionarArchivoDirectorio')
		->name('directorio.seleccionar');

	Route::group(['middleware'=>'auth'],function(){
		Route::get('/nueva','IntegranteController@nueva')
			->name('integrante.nueva');
		Route::post('/guardar','IntegranteController@guardar')
			->name('integrante.guardar');
		Route::get('/editar/{id}','IntegranteController@editar')
			->name('integrante.editar');
		Route::put('/actualizar/{id}','IntegranteController@actualizar')
			->name('integrante.actualizar');
	});
	*/
	Route::get('/',function(){
		return view('cuadernos.index');
	});
});

Route::post('/d', 'HomeController@almacenarDirectorio')
	->name('directorio.almacenar');