<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StatsController extends Controller
{
    public function ordersCount()
    {
        return $this->response(
            Order::query()
                ->where("created_at", ">=", Carbon::now()->subMonth())
                ->whereRelation("status", "code", "closed")
                ->count()
        );
    }

    public function ordersSalesSum()
    {
        return $this->response(
            Order::query()
                ->where("created_at", ">=", Carbon::now()->subMonth())
                ->whereRelation("status", "code", "closed")
                ->sum("total_sum")
        );
    }
}
