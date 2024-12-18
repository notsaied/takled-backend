<?php

use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\FullDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FeedbackController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post("contact-us", [ContactUsController::class, 'store']);


Route::get("full-data", [FullDataController::class, 'index']);




