<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\God;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function index(){
        return view('front.index');
    }
    public function gods(){
        $gods = God::all();
        return view('front.his1',compact('gods'));
    }

    public function products(){
        $products = Product::all();
        return view('front.shop',compact('products'));
    }


    
}


