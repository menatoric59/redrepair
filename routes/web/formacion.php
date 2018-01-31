<?php
Route::group(['prefix'=>'formacion'],function(){
    Route::get('/',function (){
        return view('formacion.index');
    })->name('formacion');
	Route::get('/seminarios',function(){
		return view('formacion.seminarios');
	})->name('seminarios');
    Route::get('/talleres',function(){
        return view('formacion.talleres');
    })->name('talleres');
});
