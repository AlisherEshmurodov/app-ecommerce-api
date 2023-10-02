<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\DeliveryMethod;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserAddress;
use function Ramsey\Uuid\Lazy\toString;

class OrderController extends Controller
{


    public function index()
    {
        return OrderResource::collection(auth()->user()->orders);
    }


    public function create()
    {
        //
    }


    public function store(StoreOrderRequest $request)
    {
        $sum = 10;
        $address = UserAddress::find($request->address_id);
        $products = Product::query()->limit(2)->get();
        auth()->user()->orders()->create([
            "delivery_method_id" => $request->delivery_method_id,
            "payment_type_id" => $request->payment_type_id,
            "address" => $address,
            "total_sum" => $sum,
            "comments" => $request->comments,
            "products" => $products
        ]);

        return response()->json([
            "success" => true
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return $order;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
