<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CateGoriesController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;

Route::post('/register', [AutoController::class,'register']);
Route::post('/login', [AutoController::class,'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
      'catergories' => CateGoriesController::class,
      'menus' => MenuController::class,
      'orders' => OrdersController::class,
      'payment' => PaymentController::class,
]);
