<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\God;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

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

    public function contact(){
        return view('front.contact');
    }

    public function postContact(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:100',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'message'=>'required|max:300',
        ]);

        //check if data is not correct
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=> $request->phone,
            'message'=> $request->message,
        ]);
        return redirect()->back()->with(['success'=>'Your message has reached the officials, and they will contact you soon']);

    }


    public function book(){
        return view('front.book');
    }

    public function images(){
        return view('front.image');
    }

    public function video(){
        return view('front.video');
    }


    
}


