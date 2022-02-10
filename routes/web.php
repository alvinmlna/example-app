<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;

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
    return view('welcome', [
        'active' => "home",
    ]);
});


Route::get('/posts', [PostController::class, "index"]);
Route::get('/post/{post:slug}', [PostController::class, "show"]);
Route::get('/categories', [CategoryController::class, "index"]);

Route::get('/register', [RegistrationController::class, "index"])->middleware('guest');
Route::post('/register', [RegistrationController::class, "store"]);

Route::get('/login', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');