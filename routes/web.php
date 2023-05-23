<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\GodController;
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


    Route::get('/home', [AdminController::class, 'home'])->name('adminHome');
    Route::get('/gods', [GodController::class, 'index'])->name('gods');

    Route::get('/addGod', [GodController::class, 'addGod'])->name('addGod');
    Route::post('/postaddGod', [GodController::class, 'postAddGod'])->name('postAddGod');

    Route::get('/delete/{God_id}',[GodController::class, 'delete']);


});





Route::group(['namespace'=>'Front'],function(){
    // echo "hss";die;
    Route::get('/home', [HomeController::class, 'index']) ->name('adas');

});


// Route::group(['namespace'=>'Front'],function(){

//     Route::get('/home', [profileController::class, 'profile']);

// });


