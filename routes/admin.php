<?php

use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::prefix("stats")->group(function () {

    Route::get("orders-count", [StatsController::class, "ordersCount"]);

});
