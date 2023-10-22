<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StatsController extends Controller
{
    public function ordersCount(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();
        if ($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }


        return $this->response(
            Order::query()
                ->whereBetween("created_at", [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation("status", "code", "closed")
                ->count()
        );
    }

    public function ordersSalesSum(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();
        if ($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
                ->whereBetween("created_at", [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation("status", "code", "closed")
                ->sum("total_sum")
        );
    }
}
