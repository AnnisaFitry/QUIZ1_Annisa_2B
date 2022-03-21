<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JonController;

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', [JonController::class, 'Contact']);
