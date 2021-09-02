<?php

namespace App\Http\Controllers;

// disini sudah ada yang diminta oleh error
use App\Category;
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
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect('category');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
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
