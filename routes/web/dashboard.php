<?php

Route::group(['prefix'=>'dashboard','middleware'=>['auth']],function (){
    Route::get('/',function (){
        return view('dashboard.index');
    })->name('dashboard');

});