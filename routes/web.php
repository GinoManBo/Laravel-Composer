<?php

use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));
Route::get('/posts', [PostController::class, 'index']);
Route::get('/gatos', [GetController::class, 'gatos']);
