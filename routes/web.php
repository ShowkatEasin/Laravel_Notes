<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/abm', function () {
    return view('welcome');
});

Route::get('/xyz', 'App\Http\Controllers\MyController@xyz');


