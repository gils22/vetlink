<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        $currentDate = Carbon::now()->format('l, j F Y');

        // Passing variabel tanggal ke view
        return view('dashboard', compact('currentDate'));
    }
}