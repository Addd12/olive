<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function listings(){
        $user = Auth::user();
        //dd($user->id);
        $products = Product::all()->where('user_id', $user->id);

        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function show(Product $product){
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product){
        request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'img_url' => ['required'],
            'quantity' => ['required', 'numeric', 'min: 0'],
            'price' => 'required | numeric | min:0',
        ]);

        $product->update([
            'name' => request('name'),
            'description' => request('description'),
            'img_url' => request('img_url'),
            'quantity' => request('quantity'),
            'price' => request('price'),
        ]);

        return redirect('/products/'.$product->id);
    }

}
