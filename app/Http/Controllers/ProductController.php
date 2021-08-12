<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Requests;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id', 'ASC')->paginate(5);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('products.list', compact('products'))->with('i', $value);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'description' => 'required', 'photo', 'price']);
        // create new product
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        Product::find($id)->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product removed successfully');
    }
    public function home(){
        return view('home');
    }
}
