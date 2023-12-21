<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    if (!Auth::check()) {
        return view('pages.auth.login');
    }
    return view('pages.dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard');
    })->name('home');
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
