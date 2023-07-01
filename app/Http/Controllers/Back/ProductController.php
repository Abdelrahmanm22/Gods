<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $products = Product::orderBy('position','ASC')->get();
        return view('back.allProduct',compact('user','products'))->with('title','Products');
    }
    public function reorder(Request $request){
        $posts = Product::all();

        foreach ($posts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['position' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }

    public function addProduct(){
        $user = Auth::user();
        return view('back.addProduct',compact('user'))->with('title','Add Product');
    }
    
    public function postAddProduct(Request $request){
        $user = Auth::user();
         

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:100',
            'price'=>'required|numeric',
            'img'=>'required',
        ]);

        //check if data is not correct
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }


        $file_extension = $request->img->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'image/Product';
        $request->img->move($path,$file_name);

        
        // $password = Hash::make($request['password']);
        //push data in database
        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'image'=>$file_name,
            'idAdmin'=>$user->id,
        ]);
        return redirect()->back()->with(['success'=>'Added successfully']);
    }

    public function update($id){
        $user = Auth::user();
        $products= Product::find($id);
        return view('back.updateProduct',compact('user','products'))->with('title','Update Product');
    }


    public function postUpdate(Request $req,$id){

        $product = Product::find($id);
        $user = Auth::user();
        //get CV 
        if(!empty($req->img)){
            
            $file_extension = $req->img->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'image/Product';
            $req->img->move($path,$file_name);
            $product->update([
                'image'=>$file_name,
            ]);
        }

        
        
        $product->update([
            'name'=>$req->name,
            'price'=>$req->price,
            'idAdmin'=>$user->id,
        ]);
        return redirect()->back()->with(['success'=>'updated Successfully']);
    }

    public function delete($id){
        $product = Product::find($id);
        if(!$product){
            return redirect()->back()->with(['error'=>'This Product not Found']);
        }
        $product ->delete();
        return redirect()->route('products')->with(['success'=>'Deleted successfully']);
    }
}
