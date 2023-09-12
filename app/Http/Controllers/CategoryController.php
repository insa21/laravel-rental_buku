<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categoies = Category::all();
        return view('category', ['categories' => $categoies]);
    }

    public function add()
    {
        return view('category-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        $category = Category::create($request->all());
        return redirect('categories')->with('status', 'Category added sucessfuly');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category-edit', ['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('categories')->with('status', 'Category updated sucessfuly');
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category-delete', ['category' => $category]);
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('categories')->with('status', 'Category deleted sucessfuly');
    }

    public function deletedList()
    {
        $deletedCategory = Category::onlyTrashed()->get();
        return view('category-deleted-list', ['deletedCategory' => $deletedCategory]);
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('categories')->with('status', 'Category restored sucessfuly');
    }
}
