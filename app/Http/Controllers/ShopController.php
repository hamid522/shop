<?php

namespace App\Http\Controllers;
use App\product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        //show all products
        $products= product::inRandomOrder()->take(5)->get();
        return view('shop')->->with('products', $products);
    }


    public function show($slug)
    {
        //show one product
        $product = product::where('slug',$slug)->firstOrFail();

        return view('product')->->with('product', $product);
    }

}
