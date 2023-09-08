<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('ini halaman Dashboard');
        return view('dashboard');
    }
}
