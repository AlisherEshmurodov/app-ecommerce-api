<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\DeliveryMethod;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;


class OrderController extends Controller
{


    public function index()
    {
//        return auth()->user()->orders;
        return OrderResource::collection(auth()->user()->orders);
    }


    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $address = UserAddress::find($request->address_id);
        $products = [];

        foreach ($request->products as $requestProduct) {
            $product = Product::with("stocks")->findOrFail($requestProduct['product_id']);
            $product->order_quantity = $requestProduct["quantity"];


            if (
                $product->stocks()->find($requestProduct["stock_id"]) &&
                $product->stocks()->find($requestProduct["stock_id"])->quantity >= $product->order_quantity
            ) {
                $productWithStock = $product->withStock($requestProduct["stock_id"]);
                $productResource = (new ProductResource($productWithStock))->resolve();
                $sum = $sum + ($product->order_quantity * $productResource['price']);

                $products[] = $productResource;
            }else{
                return response()->json([
                    "success" => false,
                    "message" => "Chosen wrong product's stock",
                ]);
            }
        }

        if ($products != [] && $sum != 0) {
            $ordered = auth()->user()->orders()->create([
                "delivery_method_id" => $request->delivery_method_id,
                "payment_type_id" => $request->payment_type_id,
                "address" => $address,
                "total_sum" => $sum,
                "comments" => $request->comments,
                "products" => $products
            ]);

            if ($ordered) {
                foreach ($products as $ordered_product) {
                    $stock = Stock::find($ordered_product['inventory'][0]['id']);
                    $stock['quantity'] = $stock['quantity'] - $ordered_product['order_quantity'];
                    $stock->save();
                }
            }


            return response()->json([
                "success" => true
            ]);
        }
        else{
            return response()->json([
                "success" => false,
                "message" => "Cant create order",
            ]);
        }
    }


    public function show(Order $order)
    {
        return new OrderResource($order);
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
