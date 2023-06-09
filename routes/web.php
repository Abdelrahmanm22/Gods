<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\GodController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\ContactController;
use App\Http\Controllers\Front\ClientController;
use Faker\Guesser\Name;

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



Route::get('/testback',function(){
    return view('back.register');
});
// Route::get('/',function(){return view('front.index');});
// Route::get('/',function(){return view('front.index');});


Route::group(['namespace'=>'Back','prefix'=>'admin'],function(){

    ///code authentication Admin===============================
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/postRegister', [AdminController::class, 'postRegister'])->name('adminRegister');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::group(['middleware'=>'throttle:5,1'],function(){
        Route::get('/login', [AdminController::class, 'login'])->name('login');
    });
    Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('adminLogin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    ///code authentication Admin===============================

<<<<<<< HEAD
    Route::group(['middleware'=>'auth'],function(){

        ///مهم جدا تقولهم علي الميدل وير===========
        //////////////////////Routes For God//////////////////////////////
        Route::get('/home', [AdminController::class, 'home'])->name('adminHome');
        Route::get('/gods', [GodController::class, 'index'])->name('Gods');
        Route::get('/addGod', [GodController::class, 'addGod'])->name('addGod');
        Route::post('/postaddGod', [GodController::class, 'postAddGod'])->name('postAddGod');
        Route::get('/deleteGod/{God_id}',[GodController::class, 'delete']);
        Route::get('/updateGod/{id}',[GodController::class,'update']);
        Route::post('/postUpdateGod/{id}',[GodController::class,'postUpdate'])->name('admin.update.God');
        //////////////////////Routes For God//////////////////////////////
    });
=======
   
    //////////////////////Routes For God//////////////////////////////
    Route::get('/home', [AdminController::class, 'home'])->name('adminHome')->middleware('auth');
    Route::get('/gods', [GodController::class, 'index'])->name('Gods')->middleware('auth');
    Route::get('/addGod', [GodController::class, 'addGod'])->name('addGod')->middleware('auth');
    Route::post('/postaddGod', [GodController::class, 'postAddGod'])->name('postAddGod')->middleware('auth');
    Route::get('/deleteGod/{God_id}',[GodController::class, 'delete'])->middleware('auth');
    Route::get('/updateGod/{id}',[GodController::class,'update'])->middleware('auth');
    Route::post('/postUpdateGod/{id}',[GodController::class,'postUpdate'])->name('admin.update.God')->middleware('auth');
    //////////////////////Routes For God//////////////////////////////

>>>>>>> 92db549dba54aacf0f09013a6b352914276ab968

    //////////////////////Routes For Product//////////////////////////////
    Route::get('/products', [ProductController::class, 'index'])->name('products')->middleware('auth');
    Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct')->middleware('auth');
    Route::post('/postAddProduct', [ProductController::class, 'postAddProduct'])->name('postAddProduct')->middleware('auth');
    Route::get('/updateProduct/{id}',[ProductController::class,'update'])->middleware('auth');
    Route::post('/postUpdateProduct/{id}',[ProductController::class,'postUpdate'])->name('admin.update.product')->middleware('auth');
    Route::get('/deleteProduct/{Product_id}',[ProductController::class, 'delete'])->middleware('auth');
    Route::post('product/reorder',[ProductController::class, 'reorder'])->name('product.reorder');///important
    // Route::post('currencies/reorder', 'CurrenciesController@reorder')->name('currencies.reorder');
    //////////////////////Routes For Product//////////////////////////////

    //////////////////////Admin convert client to admin And vice versa////////////////////
    Route::get('/users', [AdminController::class, 'users'])->name('users')->middleware('auth');
    Route::get('/convertToAdmin/{id}',[AdminController::class,'convertToAdmin'])->name('ctAdmin')->middleware('auth');
    Route::get('/convertToClient/{id}',[AdminController::class,'convertToClient'])->name('ctClient')->middleware('auth');
    Route::get('/updatePass/{id}',[AdminController::class,'changePasswordForClient'])->middleware('auth');
    Route::post('/postUpdatePass/{id}',[AdminController::class,'postUpdatePassword'])->name('admin.update.password')->middleware('auth');
    //////////////////////Admin convert client to admin And vice versa////////////////

    /////////////////////contact for admins//////////////////////////////////
    Route::get('/messages', [ContactController::class, 'index'])->name('messages')->middleware('auth');
    /////////////////////contact for admins//////////////////////////////////

});





Route::group(['namespace'=>'Front'],function(){
    // echo "hss";die;
    Route::get('/', [HomeController::class, 'index']) ->name('myHome');

    ///code authentication Client===============================
    Route::get('/register', [ClientController::class, 'register']) ->name('signUp');
    Route::post('/postRegister', [ClientController::class, 'postRegister']) ->name('postSignUp');
    Route::group(['middleware'=>'throttle:5,1'],function(){
        Route::get('/login', [ClientController::class, 'login']) ->name('signIn');
    });
    Route::post('/postLogin', [ClientController::class, 'postLogin']) ->name('postSignIn');
    Route::get('/logout', [ClientController::class, 'logout'])->name('clientLogout');
    ///code authentication Client===============================


    Route::get('/gods', [HomeController::class, 'gods']) ->name('gods');




    Route::get('/products', [HomeController::class, 'products']) ->name('shop');






    Route::get('/profile', [ClientController::class, 'profile']) ->name('profile')->middleware('auth:custom');




    Route::post('/updateClientPhoto',[ClientController::class,'clientPhoto'])->name('updatePhoto')->middleware('auth:custom');




    Route::get('/contact', [HomeController::class, 'contact']) ->name('contact');
    Route::post('/postContact', [HomeController::class, 'postContact']) ->name('postContact');





    //routes for normal pages:
    Route::get('/book', [HomeController::class, 'book']) ->name('book');
    Route::get('/images', [HomeController::class, 'images']) ->name('image');
    Route::get('/video', [HomeController::class, 'video']) ->name('video');

});





