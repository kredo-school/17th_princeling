<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChartController;
use App\Models\TimelineData;

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

Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/profile/digit-code', [ProfileController::class, 'digit'])->name('digit');

Route::get('profile/show', [ChartController::class, 'showChart']);

Route::get('/get-chart-data/{timeline}', [ChartController::class, 'getChartData']);