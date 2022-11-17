<?php

use Illuminate\Support\Facades\Route;


Route::get('/abc', function () {
    return view('showkat');
});

Route::get('/abm', function () {
    return view('welcome');
});

Route::get('/xyz', function () {
    return view('osman');
});


