<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(12);
        return view('products.index', ['products' => $products]);
    }

    public function listings(){
        $user = Auth::user();
        //dd($user->id);
        $products = Product::latest()->where('user_id', $user->id)->paginate(8);

        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Product $product){
        request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'img_url' => ['required'],
            'quantity' => ['required', 'numeric', 'min: 0'],
            'price' => 'required | numeric | min:0',
        ]);
        $user_id = Auth::user()->id;
        //stores the uploaded image in the local folder in storage/images
        $img_path = request()->img_url->store('images');
        Product::create([
            'user_id' => $user_id,
            'name' => request('name'),
            'description' => request(key: 'description'),
            'img_url' => $img_path, //set the image url to the img path
            'quantity' => request('quantity'),
            'price' => request('price'),
        ]);

        return redirect('/products');
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
    public function destroy(Product $product){
        $product->delete();
        return redirect('/products');
    }
}
