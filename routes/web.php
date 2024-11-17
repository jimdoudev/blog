<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
