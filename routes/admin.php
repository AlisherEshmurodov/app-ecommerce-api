<?php

use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::prefix("stats")->group(function () {

    Route::get("orders-count", [StatsController::class, "ordersCount"])->middleware("auth:sanctum");
    Route::get("orders-sales-sum", [StatsController::class, "ordersSalesSum"])->middleware("auth:sanctum");

});
