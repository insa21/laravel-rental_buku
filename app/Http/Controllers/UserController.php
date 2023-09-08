<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // dd('Ini halaman profile');
        return view('profile');
    }
}
