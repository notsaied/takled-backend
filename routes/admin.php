<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\SectionController;

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
    'prefix' => '/sections',
    'middleware' => 'auth:admins',
    'as' => 'admin.sections.'
],function(){
    Route::get('/',[SectionController::class,'index'])->name('index');

    Route::post("/{section}",[SectionController::class,'update'])->name('update');
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











