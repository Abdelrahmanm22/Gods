<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',function(){return view('front.index1');});
Route::get('/',function(){return view('front.index');});
// Route::get('/',function(){return view('front.index');});





Route::group(['namespace'=>'Front'],function(){
    // echo "hss";die;
    Route::get('/home', [HomeController::class, 'index']);

});




