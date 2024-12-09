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

Route::get('/register', function () {
    return view('register');
});

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/subscription', function () {
    return view('subscription');
});

Route::get('/datadokter', function () {
    return view('datadokter');
});

Route::get('clients/owners', function () {
    return view('owners');
});

Route::get('clients/patient', function () {
    return view('patient');
});

Route::get('clients/patient/dataPatient', function () {
    return view('contents/patient/dataPatient');
});

Route::get('clients/patient/tambahPatient', function () {
    return view('contents/patient/tambahPatient');
});

Route::get('clients/patient/dataPatient/rekamMedis', function () {
    return view('contents/patient/rekamMedis');
});

Route::get('clients/patient/dataPatient/tambahRekamMedis', function () {
    return view('contents/patient/tambahRekamMedis');
});

Route::get('clients/owners/tambahOwners', function () {
    return view('contents/owners/tambahOwners');
});

Route::get('clients/owners/dataOwners', function () {
    return view('contents/owners/dataOwners');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/iventory', function () {
    return view('iventory');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/reports', function () {
    return view('reports');
});
