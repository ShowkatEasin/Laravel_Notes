<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Backend\ProductController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/abd', function () {
//     return view('showkat');
// });

 Route::get('/abc','App\Http\Controllers\MyController@abc')->name("abc");
 Route::get('/abd',[MyController::class,'abd'])->name("abd");
 Route::get('/product',[ProductController::class,'index'])->name("product");
 
 Route::post('/addproduct',[ProductController::class,'insert'])->name("addproduct");

 Route::get('/showproduct',[ProductController::class,'show'])->name("showproduct");

 Route::get('/delete/{id}',[ProductController::class,'delete'])->name("delete");


