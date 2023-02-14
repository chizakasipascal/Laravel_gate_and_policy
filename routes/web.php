<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gate', [App\Http\Controllers\AuthorizationConttroller::class, 'index'])->name('gate.index');

Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show')->middleware('can:view,post');
Route::get('posts/delete/{post}', [PostController::class, 'destroy'])->name('post.delete')->middleware('can:delete,post');




