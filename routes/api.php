<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', UserController::class);
Route::apiResource('articles', ArticleController::class);