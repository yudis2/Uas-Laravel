<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::all();
        return view("Product.index", compact("products"));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view("Product.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'category_id' => 'required'
        ]);
        $product = Product::create($request->all());
        if($request->hasfile('picture')) {
            $path = $request->file('picture')->store('image');
            $product->picture = $path;
            $product->save();
        }
        return redirect('/product');
    }

    public function show(Product $product)
    {
        return view('Product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        return view('Product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        if($request->hasfile('picture')) {
            $path = $request->file('picture')->store('image');
            $product->picture = $path;
            $product->save();
        }
        return redirect()->route('product.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('product');
    }
}
