<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Status;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/admin', function () {
    return view('admin'); // Atau pesan "Ini halaman admin"
})->middleware('admin');

Route::get('/user', function () {
    return view('user'); // Atau pesan "Ini halaman user"
})->middleware('user');
