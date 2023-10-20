<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentCardTypeController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardController;
use App\Http\Controllers\UserSettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->group(function () {
//});



Route::get('products/{product}/related', [ProductController::class, 'related']);

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('categories.products', CategoryProductController::class);
Route::apiResource('delivery-methods', DeliveryMethodController::class);
Route::apiResource('payment-types', PaymentTypeController::class);
Route::apiResource('favorites', FavoriteController::class)->middleware("auth:sanctum");
Route::apiResource('orders', OrderController::class)->middleware("auth:sanctum");
Route::apiResource('user-addresses', UserAddressController::class)->middleware("auth:sanctum");
Route::apiResource('statuses', StatusController::class)->middleware("auth:sanctum");
Route::apiResource('statuses.orders', StatusOrderController::class)->middleware("auth:sanctum");
Route::apiResource('reviews', ReviewController::class)->middleware("auth:sanctum");
Route::apiResource('products.reviews', ProductReviewController::class)->middleware("auth:sanctum");
Route::apiResource('settings', SettingsController::class)->middleware("auth:sanctum");
Route::apiResource('user-settings', UserSettingController::class)->middleware("auth:sanctum");
Route::apiResource('payment-card-types', PaymentCardTypeController::class)->middleware("auth:sanctum");
Route::apiResource('user-payment-cards', UserPaymentCardController::class)->middleware("auth:sanctum");


