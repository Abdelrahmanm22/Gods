<?php

namespace App\Http\Controllers\Back;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class ContactController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $messages = Contact::all();
        return view('back.messages',compact('user','messages'))->with('title','Messages');
    }
}
