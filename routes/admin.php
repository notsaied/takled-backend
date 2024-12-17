<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FeedbackController;
Route::get("ec-admin", "HomeController@index")->name("dash.home");


Route::group([
    'as' => 'admin.',
],function(){
    Route::get('/','AuthController@showLogin')->name('home');
    Route::post('/login','AuthController@login')->name('login');

    Route::post('/logout', 'AuthController@logout')->name('logout');
});

Route::group([
    'prefix' => '/home',
    'middleware' => 'auth:admins',
    'as' => 'admin.'
],function(){
    Route::get('/','HomeController@index')->name('home');

});

Route::group([
    'prefix' => '/barbers',
    'middleware' => 'auth:admins',
    'as' => 'admin.barbers.'
],function(){
    Route::get('/',[BarberController::class,'index'])->name('index');

    Route::get('/create',[BarberController::class,'create'])->name('create');


    Route::post('/store',[BarberController::class,'store'])->name('store');

    Route::get('/edit/{barber}',[BarberController::class,'edit'])->name('edit');



    Route::post('/{barber}',[BarberController::class,'update'])->name('update');

    Route::post('/delete/{barber}',[BarberController::class,'destroy'])->name('delete');
});


Route::group([
    'prefix' => '/feedbacks',
    'middleware' => 'auth:admins',
    'as' => 'admin.feedbacks.'
],function(){
    Route::get('/',[FeedbackController::class,'index'])->name('index');

    Route::post('/delete/{feedback}',[FeedbackController::class,'destroy'])->name('delete');
});


Route::group([
    'prefix' => '/services',
    'middleware' => 'auth:admins',
    'as' => 'admin.services.'
],function(){
    Route::get('/',[ServiceController::class,'index'])->name('index');

    Route::post('/store',[ServiceController::class,'store'])->name('store');

    Route::post('/{service}',[ServiceController::class,'update'])->name('update');

    Route::post('/delete/{service}',[ServiceController::class,'destroy'])->name('delete');
});

Route::group([
    'prefix' => '/bookings',
    'middleware' => 'auth:admins',
    'as' => 'admin.bookings.'
],function(){
    Route::get('/',[BookingController::class,'index'])->name('index');

    Route::post('/update',[BookingController::class,'update'])->name(name: 'update');

});




Route::group([
    'prefix' => '/configs',
    'middleware' => 'auth:admins',
    'as' => 'admin.configs.'
],function(){
    Route::get('/','ConfigController@index')->name('index');
    Route::post('/update','ConfigController@update')->name('update');
});







Route::group([
    'prefix' => '/settings',
    'middleware' => 'auth:admins',
    'as' => 'admin.settings.'
],function(){
    Route::get('/','SettingsController@index')->name('index');
    Route::post('/update','SettingsController@update')->name('update');
    // Route::get('/analytics/{id}','CurrencyController@analytics')->name('analytics');
    // Route::post('/{id}','CurrencyController@update')->name('update');
});











