<?php

use App\Http\Controllers\Admin\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\SectionController;
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
    'prefix' => '/sections',
    'middleware' => 'auth:admins',
    'as' => 'admin.sections.'
],function(){
    Route::get('/',[SectionController::class,'index'])->name('index');

    Route::post("/{section}",[SectionController::class,'update'])->name('update');
});


Route::group([
    'prefix' => '/posts',
    'middleware' => 'auth:admins',
    'as' => 'admin.posts.'
],function(){
    Route::get('/',[PostController::class,'index'])->name('index');

    Route::post('/',[PostController::class,'store'])->name('store');

    Route::post("/update/{post}",[PostController::class,'update'])->name('update');

    Route::post("/delete/{post}",[PostController::class,'destroy'])->name('delete');
});




Route::group([
    'prefix' => '/contact-us',
    'middleware' => 'auth:admins',
    'as' => 'admin.contact-us.'
],function(){
    Route::get('/',[ContactUsController::class,'index'])->name('index');

    Route::post('/delete/{contactUs}',[ContactUsController::class,'destroy'])->name('delete');

    Route::post('/update/{contactUs}',[ContactUsController::class,'update'])->name('update');
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











