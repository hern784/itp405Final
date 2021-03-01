<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

//ROUTES FOR LOGGING IN  
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/login/shopper', [LoginController::class, 'shopper'])->name('login.shopper');
Route::post('/login/shopper', [LoginController::class, 'login_shopper'])->name('login.login_shopper');
Route::get('/login/business', [LoginController::class, 'business'])->name('login.business');
Route::post('/login/business', [LoginController::class, 'login_business'])->name('login.login_business');


//ROUTES FOR REGISTER IN  
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::get('/register/shopper', [RegisterController::class, 'shopper'])->name('register.shopper');
Route::post('/register/shopper', [RegisterController::class, 'register_shopper'])->name('register.register_shopper');
Route::get('/register/business', [RegisterController::class, 'business'])->name('register.business');
Route::post('/register/business/', [RegisterController::class, 'register_business'])->name('register.register_business');


//ROUTES FOR PROFILE IN  
Route::get('/profile', [ShopperController::class, 'profile'])->name('shopper.profile');

// LANDING PAGE
Route::get('/', function () {
    return view('index');
});
