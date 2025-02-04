<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SetMenuController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/set-menus', [SetMenuController::class, 'index']);


