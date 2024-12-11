<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;




Route::get('/product',[Controllers\ProductController::class,'index']);
Route::get('/caffe',[Controllers\TableController::class,'index']);



Route::get('/', function () {
    return view('welcome');
});
