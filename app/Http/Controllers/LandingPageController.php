<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class LandingPageController extends Controller
{

    public function index()
    {
      //Landing page of my application
      $products= Product::inRandomOrder()->take(5)->get();
      return view('landing-page')->with('products',$products);

    }


}
