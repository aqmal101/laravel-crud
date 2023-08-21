<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){ 
        $products = Product::paginate(5);
        // $data['products'] = Product::all();
        return view('product.index', compact('products'));
        // return view('product.index', $data);
    }

    public function create() {
        return view('product.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ]);
        
        // menyimpan nilai yang sudah disubmit
        $product = new Product();
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->save();
        
        // setelah disimpan maka user akan diarahkan ke halaman product lagi
        return redirect()->route('product.index')->with('success', 'Berhasil');
        // with = alert
    }

    public function edit($id) {
        $data['product'] = Product::find($id);

        return view('product.edit', $data);
    }

    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Success');
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Success');
    }
}
