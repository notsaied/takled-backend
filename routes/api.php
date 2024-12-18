<?php

use App\Http\Controllers\Api\ContactUsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FeedbackController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("all-date", [FullDateController::class, "index"]);


Route::post("feedback", [FeedbackController::class, 'store']);
Route::post("contact-us", [ContactUsController::class, 'store']);



