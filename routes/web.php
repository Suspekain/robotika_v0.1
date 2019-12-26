<?php

Route::get('/', function () {
    return view('index');
});

Route::post('/contacto', 'ContactController@store')->name('store');
