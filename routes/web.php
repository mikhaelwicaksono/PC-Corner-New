<?php

use App\Http\Controllers\RequestsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [UserController::class, 'register_auth'])->name('register')->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login_auth'])->name('login')->middleware('guest');

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('login');
})->name('logout')->middleware('auth');
Route::view('/home', 'home', ['title' => 'home'])->name('home')->middleware('auth');
Route::get('/request/{b}',[RequestsController::class,'viewing']);
Route::post('/load/{c}',[RequestsController::class,'adding']);
Route::get('/updatepassword/{s}',[UserController::class,'viewupdate']);
Route::post('/executedpassword/{l}',[UserController::class,'updatingpassword']);

Route::get('/home', [HomeController::class, 'showName']);
