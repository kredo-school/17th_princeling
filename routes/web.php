<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;


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

Route::get('/', [PageController::class, 'firstPage'])->name('firstpage');

Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

