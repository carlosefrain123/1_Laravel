<?php

use Illuminate\Support\Facades\Route;
//La App, siempre con mayuscula
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products',ProductController::class);
