<?php
Route::group(['prefix'=>'formacion'],function(){
	Route::get('/seminarios',function(){
		return view('formacion.seminarios');
	})->name('seminarios');
});
