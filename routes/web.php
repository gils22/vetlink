<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
