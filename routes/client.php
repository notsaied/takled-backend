<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;

Route::get('/',[HomeController::class,"index"] )->name(name: 'index.home')->middleware('auth:admins');

Route::get('/login', [AuthController::class,"showLogin"])->name('login');




