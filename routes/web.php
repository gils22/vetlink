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

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/datadokter', function () {
    return view('datadokter');
});

Route::get('/owners', function () {
    return view('owners');
});

Route::get('/patient', function () {
    return view('patient');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});
