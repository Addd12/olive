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

    public function show(Product $product){
        return view('products.show', ['product' => $product]);
    }
}
