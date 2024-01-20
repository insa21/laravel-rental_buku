<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
        // dd('ini halaman buku');
        $books = Book::all();
        return view('book', ['books' => $books]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('book-add', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:100',
            'title'     => 'required|max:255',
        ]);

        // * Upload Gambar 
        $newName = '';
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $books = Book::create($request->all());
        // * untuk kategori dalam add data book
        // $books->categories()->sync($request->categories);
        return redirect('books')->with('status', 'Book added sucessfuly');
    }

    public function edit($slug)
    {
        $categories = Category::all();
        $book = Book::where('slug', $slug)->first();
        return view('book-edit', ['categories' => $categories, 'book' => $book]);
    }
}
