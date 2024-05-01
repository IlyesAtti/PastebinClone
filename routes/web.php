<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function()
{
    return View::make('users');
});

Route::POST('add', [PostController::class,'AddPost']);
Route::get('/', [PostController:: class, "Show"])->name('home');
Route::get('post/{id}', [PostController::class, "list"])->name('post.show');