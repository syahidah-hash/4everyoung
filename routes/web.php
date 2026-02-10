<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavingController;

Route::get('/', [UserController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/savings', [SavingController::class, 'index']);
