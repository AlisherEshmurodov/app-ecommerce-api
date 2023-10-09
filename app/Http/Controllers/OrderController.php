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
        if (request()->has("status_id")) {

            return $this->response(OrderResource::collection(
                auth()->user()->orders()->where("status_id", request("status_id"))->paginate(10)
            ));
        }
        return $this->response(OrderResource::collection(auth()->user()->orders));
    }


    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $address = UserAddress::find($request->address_id);
        $products = [];
        $notFoundProducts = [];

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
            } else {
                if (!$product->stocks()->find($requestProduct["stock_id"])) {
                    return $this->error("Product not found", [$requestProduct]);
                }
                $requestProduct["amount of product"] = $product->stocks()->find($requestProduct["stock_id"])->quantity;
                $notFoundProducts[] = [
                    "product_id" => $requestProduct['product_id'],
                    "amount of product" => $requestProduct["amount of product"]
                ];
                return $this->error("Product amount not enough", $notFoundProducts);
            }
        }

        if ($notFoundProducts == [] && $products != [] && $sum != 0) {
            $ordered = auth()->user()->orders()->create([
                "delivery_method_id" => $request->delivery_method_id,
                "payment_type_id" => $request->payment_type_id,
                "status_id" => in_array($request->payment_type_id, [1, 2]) ? 1 : 10,
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
                return $this->success("Order successfully created", $ordered);
            } else {
                return $this->error("Can not create order", $ordered);
            }
        } else {
            return $this->error("Can not created order", $notFoundProducts);
        }
    }


    public function show(Order $order)
    {
        return $this->response(new OrderResource($order));
    }


    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
