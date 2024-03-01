<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('firstpage');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/home', [UserController::class, 'index'])->name('homepage');

// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');

// Route::get('/register', [UserController::class, 'create']);
// Route::post('/register', [UserController::class, 'store'])->name('register');