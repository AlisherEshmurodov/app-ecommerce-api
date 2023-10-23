<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethod;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StatsController extends Controller
{
    public function ordersCount(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();
        if ($request->has(['from', 'to'])) {
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
        if ($request->has(['from', 'to'])) {
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

    public function deliveryMethodsRatio(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();
        if ($request->has(["from", "to"])) {
            $from = $request->from;
            $to = $request->to;
        }

        $response = [];

        $allOrdersCount = Order::query()
            ->whereBetween("created_at", [$from, Carbon::parse($to)->endOfDay()])
            ->whereRelation("status", "code", "closed")
            ->count();

        foreach (DeliveryMethod::all() as $deliveryMethod) {
            $deliveryMethodOrdersCount = $deliveryMethod->orders()
                ->whereBetween("created_at", [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation("status", "code", "closed")
                ->count();

            $response[] = [
                "name" => $deliveryMethod->getTranslations("name"),
                "percentage" => $deliveryMethodOrdersCount * 100 / $allOrdersCount,
                "amount" => $deliveryMethodOrdersCount,
            ];

        }
            return $this->response($response);
    }
}
