<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    //

    public function home(){

        $user = Auth::user();
        
                    
        return view('back.index',compact('user'))->with('title','home');
    }
    
    public function users(){
        $user = Auth::user();
        $myId = $user->id;
        $Admins = User::where('id', '<>', $myId)->get();
        $Clients = Client::all();
        return view('back.users',compact('user','Admins','Clients'))->with('title','Users');
    }

    public function convertToAdmin($clientID){
        $client= Client::find($clientID);
        User::create([
            'user_name'=>$client->user_name,
            'email'=>$client->email,
            'password'=> $client->password,
        ]);
        $client->delete();
        return redirect()->back()->with(['successAd'=>'Converted to Admin Successfully']);
    }

    public function convertToClient($AdminID){
        $Admin= User::find($AdminID);
        Client::create([
            'user_name'=>$Admin->user_name,
            'email'=>$Admin->email,
            'password'=> $Admin->password,
        ]);
        $Admin->delete();
        return redirect()->back()->with(['success'=>'Converted to Client Successfully']);
    }


    public function register(){
        
        return view('back.register');
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
        User::create([
            'user_name'=>$request->username,
            'email'=>$request->email,
            'password'=> $password,
        ]);
        return redirect()->back()->with(['success'=>'registration successfully']);
    }

    public function login(){
        
        return view('back.login');
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


        if(Auth::attempt(['email'=>$email,'password'=>$pass])) {
            $request->session()->regenerate();
            return redirect('/admin/home');
        }else{
            // return "ww";
            return redirect()->back()->with(['error'=>'email or password may be not correct']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
    } 
}
