<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function ordersCount()
    {
        return $this->response(Order::query()->whereRelation("status", "code", "closed")->count());
    }
}
