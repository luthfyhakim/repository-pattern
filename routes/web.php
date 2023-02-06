<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
    ===== Routes =====
*/

Route::get('/', [ContactController::class, 'index']);
Route::get('/contact/{id}', [ContactController::class, 'show']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'store']);
