<?php

//use App\Http\Controllers\Api\{
//    ProductController
//};
use Illuminate\Support\Facades\Route;

//Route::prefix('products')->group(function () {
//    Route::get('/', [ProductController::class, 'index']);
//    Route::post('/store', [ProductController::class, 'store']);
//});

Route::get('/', function () {
    return view('welcome');
});
