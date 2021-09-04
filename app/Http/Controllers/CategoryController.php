<?php

namespace App\Http\Controllers;

// disini sudah ada yang diminta oleh error
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function index()
    {
        // error warning disini
        $categories = Category::all();
        return view('Category.index', compact('categories'));
    }

    public function create()
    {
        return view('Category.create');
    }


    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect('category');
    }

    public function show(Category $category)
    {
        return view('Category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('Category.edit', compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect('category');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('category');
    }
}
