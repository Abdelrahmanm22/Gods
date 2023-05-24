<?php

namespace App\Http\Controllers\Front;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
class ClientController extends Controller
{
    //

    public function register(){
        
        return view('front.signup');
    }

    public function postRegister(Request $request){
        //validate
        $validator = Validator::make($request->all(),[
            'username'=>'required|max:100',
            'email'=>'required|unique:admin,email',
            'password'=>'required|min:4',
        ]);

        //check if data is not correct
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }


        $password = Hash::make($request['password']);
        //push data in database
        Client::create([
            'user_name'=>$request->username,
            'email'=>$request->email,
            'password'=> $password,
        ]);
        return redirect()->back()->with(['success'=>'registration successfully']);
    }
}
