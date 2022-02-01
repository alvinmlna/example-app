<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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
    return view('welcome', [
        'active' => "home",
    ]);
});


Route::get('/posts', [PostController::class, "index"]);
Route::get('/post/{post:slug}', [PostController::class, "show"]);
Route::get('/categories', [CategoryController::class, "index"]);


Route::get('/login', [LoginController::class, "index"]);