<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products=Product::all();
        return view('modules.product.index',compact('products'));
    }


    public function create()
    {
        return view('modules.product.create');
    }


    public function store(Request $request)
    {
        $products=Product::create($request->all());
        return redirect()->route('product.index');
    }


    public function show($id)
    {
        $products=Product::find($id);
        return view('modules.product.show', compact('products'));
    }


    public function edit($id)
    {
        $products=Product::find($id);
        return view('modules.product.edit', compact('products'));
    }


    public function update(Request $request, $id)
    {
        $products = Product::find($id)->update($request->all());
        return redirect()->route('product.show', $id);
    }


    public function destroy($id)
    {
        $products = Product::find($id)->delete();
        return redirect()->route('product.index');
    }
}
