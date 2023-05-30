<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Models\God;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class GodController extends Controller
{
     
    
    public function index(){
        $user = Auth::user();
        $gods = God::all();
        return view('back.allGod',compact('user','gods'))->with('title','Gods');
    }


    public function addGod(){
        $user = Auth::user();
        return view('back.addGod',compact('user'))->with('title','Add God');
    }

    public function postAddGod(Request $request){
        $user = Auth::user();
         

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:100',
            'desc'=>'required',
            'img'=>'required',
        ]);

        //check if data is not correct
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }


        $file_extension = $request->img->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'image/God';
        $request->img->move($path,$file_name);

        
        // $password = Hash::make($request['password']);
        //push data in database
        God::create([
            'God_name'=>$request->name,
            'Description'=>$request->desc,
            'image'=>$file_name,
            'idAdmin'=>$user->id,
        ]);
        return redirect()->back()->with(['success'=>'Added successfully']);
    }

    public function update($id){
        $user = Auth::user();
        $God= God::find($id);
        return view('back.updateGod',compact('user','God'))->with('title','gods');
    }


    public function postUpdate(Request $req,$id){

        $God = God::find($id);
        $user = Auth::user();
        //get Image for God
        if(!empty($req->img)){
            
            $file_extension = $req->img->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'image/God';
            $req->img->move($path,$file_name);
            $God->update([
                'image'=>$file_name,
            ]);
        }

        
        
        $God->update([
            'God_Name'=>$req->name,
            'Description'=>$req->desc,
            'idAdmin'=>$user->id,
        ]);
        return redirect()->back()->with(['success'=>'updated Successfully']);
    }


    public function delete($id){
        $god = God::find($id);
        if(!$god){
            return redirect()->back()->with(['error'=>'This God not Found']);
        }
        $god ->delete();
        return redirect()->route('Gods')->with(['success'=>'Deleted successfully']);
    }


}
