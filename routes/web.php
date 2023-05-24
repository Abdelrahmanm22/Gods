<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\GodController;
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

    ///code authentication===============================
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/postRegister', [AdminController::class, 'postRegister'])->name('adminRegister');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('adminLogin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    ///code authentication===============================


    ///مهم جدا تقولهم علي الميدل وير===========
    Route::get('/home', [AdminController::class, 'home'])->name('adminHome')->middleware('auth');
    Route::get('/gods', [GodController::class, 'index'])->name('Gods')->middleware('auth');
    Route::get('/addGod', [GodController::class, 'addGod'])->name('addGod')->middleware('auth');
    Route::post('/postaddGod', [GodController::class, 'postAddGod'])->name('postAddGod')->middleware('auth');
    Route::get('/delete/{God_id}',[GodController::class, 'delete'])->middleware('auth');

    Route::get('/updateGod/{id}',[GodController::class,'update'])->middleware('auth');
    Route::post('/postUpdate/{id}',[GodController::class,'postUpdate'])->name('admin.update.god')->middleware('auth');


});





Route::group(['namespace'=>'Front'],function(){
    // echo "hss";die;
    Route::get('/', [HomeController::class, 'index']) ->name('myHome');
    Route::get('/gods', [HomeController::class, 'gods']) ->name('gods');
    Route::get('/register', [ClientController::class, 'register']) ->name('signUp');

});


// Route::group(['namespace'=>'Front'],function(){

//     Route::get('/home', [profileController::class, 'profile']);

// });


