<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halamanAwal');
});

Route::get('/price', function () {
    return view('halamanHarga');
});

Route::get('/contact', function () {
    return view('halamanContact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
