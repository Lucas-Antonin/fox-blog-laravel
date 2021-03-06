<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
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
    return view('home');
})->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register')
->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login')
->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')
->middleware('auth');

Route::get('/posts', [PostController::class, 'posts'])->name('posts');
Route::get('/makepost', [PostController::class, 'index'])->name('makepost')
->middleware('auth');
Route::post('/makepost', [PostController::class, 'store']);

Route::get('/user/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');
