<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/abd', function () {
//     return view('showkat');
// });

 Route::get('/abc','App\Http\Controllers\MyController@abc')->name("abc");
 Route::get('/abd',[MyController::class,'abd'])->name("abd");


