<?php

use App\Http\Controllers\RequestsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
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
})->middleware('guest');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'registerUser'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginUser'])->name('login');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('login');
    })->name('logout');
    Route::get('/request/{b}', [RequestsController::class, 'viewing']);
    Route::post('/load/{c}', [RequestsController::class, 'adding']);
    Route::get('/updatepassword/{s}', [UserController::class, 'viewupdate']);
    Route::post('/executedpassword/{b}', [UserController::class, 'updatingpassword']);
    Route::get('/profile/{b}', [UserController::class, 'display']);
    Route::get('/editprofile/{s}', [UserController::class, 'edit'])->name('Edit Profile Page');
    Route::put('/editingprofile/{b}', [UserController::class, 'update'])->name('Update Profile');

    Route::get('/home', [HomeController::class, 'showName']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::get('/history', [HistoryController::class, 'view']);
    Route::get('/history/{id}/edit',[HistoryController::class,'edit'])->name('history.edit');
    Route::post('/history/{id}/update',[HistoryController::class,'update'])->name('history.update');
    Route::get('/history/{id}/delete',[HistoryController::class,'delete'])->name('history.delete');
    
});
