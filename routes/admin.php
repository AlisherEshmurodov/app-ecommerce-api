<?php

use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::prefix("stats")->group(function () {

    Route::get("orders-count", [StatsController::class, "ordersCount"])->middleware("auth:sanctum");
    Route::get("orders-sales-sum", [StatsController::class, "ordersSalesSum"])->middleware("auth:sanctum");
    Route::get("delivery-methods-ratio", [StatsController::class, "deliveryMethodsRatio"])->middleware("auth:sanctum");
    Route::get("orders-count-by-days", [StatsController::class, "ordersCountByDays"])->middleware("auth:sanctum");

});
