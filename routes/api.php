<?php

use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BarberController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\FullDateController;
use App\Http\Controllers\Api\TelegramController;
use App\Http\Controllers\Api\ServicesController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("all-date", [FullDateController::class, "index"]);

Route::get("barbers", [BarberController::class, "index"]);

Route::get("barbers-bookings", [BarberController::class, "barberWithBookings"]);


Route::post("feedback", [FeedbackController::class, 'store']);



Route::get("/bookings", [BookingController::class, 'index']);
Route::post("bookings", [BookingController::class, 'store']);

Route::post("telegram/webhook", [TelegramController::class, 'webhook']);

Route::get("services", [ServicesController::class, "index"]);
