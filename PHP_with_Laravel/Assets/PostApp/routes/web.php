<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
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

// Route::get('/', function () {
//     return view('blank');
// });

Auth::routes();


// Landing Page

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/{user:name}/posts', [UserPostController::class, 'index'])->name('users.posts');


Route::get('/posts', [PostController::class, 'posts'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/Like', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/Like', [PostLikeController::class, 'destroy'])->name('posts.likes');
// });