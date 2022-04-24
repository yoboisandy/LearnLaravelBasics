<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $url = route('products.store');
        $title = "Add Product";
        $product = new Product();
        return view('products.create', compact('url', 'title', 'product'));
    }

    public function store(Request $request)
    {
        p($request->all());
        die;
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.view');
    }

    public function view()
    {
        $products = Product::all();
        return view('products.view', compact('products'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.view');
    }

    public function edit($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $url = route('products.update', $id);
        $title = "Edit Product";
        return view('products.create', compact('product', 'url', 'title'));
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('products.view');
    }
}
