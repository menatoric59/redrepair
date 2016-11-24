<?php
Route::group(['prefix'=>'estados'],function(){
	Route::get('/json','IntegranteController@json')->name('integrantes.json');


});

Route::post('/d', 'HomeController@almacenarDirectorio')->name('directorio.almacenar');
