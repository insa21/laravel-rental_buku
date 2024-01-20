<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', ['users' => $users]);
    }

    public function edit($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('user-edit', ['user' => $user]);
    }
}
