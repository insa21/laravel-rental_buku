<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('ini halaman Dashboard');
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('dashboard', ['book_count' => $bookCount, 'category_count' => $categoryCount, 'user_count' => $userCount]);
    }
}
