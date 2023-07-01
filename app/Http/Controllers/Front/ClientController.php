<?php

namespace App\Http\Controllers\Front;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    //

    public function profile(){
        $client=auth()->guard('custom')->user();
        return view('front.profile',compact('client'));
    }

    public function register(){
        return view('front.signup');
    }

    public function postRegister(Request $request){
        //validate

        $validator = Validator::make($request->all(),[
            'username'=>'required|max:100',
            'email'=>'required|unique:admin,email',
            'password'=>'required|min:4|confirmed',
        ]);

        //check if data is not correct
        if($validator->fails()){
            // echo "ll";die;
            return redirect()->back()->withErrors($validator);
        }


        // echo "kk";die;
        $password = Hash::make($request['password']);
        //push data in database
        Client::create([
            'user_name'=>$request->username,
            'email'=>$request->email,
            'password'=> $password,
        ]);
        return redirect()->back()->with(['success'=>'registration successfully']);
    }
    public function clientPhoto(Request $request){
        $client=auth()->guard('custom')->user();

        if(!empty($request->img)){
            
            $file_extension = $request->img->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'image/Client';
            $request->img->move($path,$file_name);
            // echo 'mm';die;
            $client->image=$file_name;
            $client->save();
        }
        return redirect()->back();
        
    }

    
    public function login(){
        
        return view('front.signin');
    }

    public function postLogin(Request $request){
        //validate
        // echo "xx";die;
        $validator = Validator::make($request->all(),[
            'email'=>'required',
            'password'=> 'required',
        ]);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $email = $request ->email;
        $pass = $request ->password;
        

        if(Auth::guard('custom')->attempt(['email'=>$email,'password'=>$pass])) {
            // dd());
            // echo "xx";die;
            // echo auth()->guard('custom')->id();die;
            $request->session()->regenerate();
            return redirect('/profile');
        }else{
            
            return redirect()->back()->with(['error'=>'email or password may be not correct']);
        }
    }

    public function logout(){
        auth()->guard('custom')->logout();
        return redirect('/');
    } 

    
}
