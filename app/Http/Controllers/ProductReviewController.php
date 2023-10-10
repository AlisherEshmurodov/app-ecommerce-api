<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use App\Models\Review;

class ProductReviewController extends Controller
{

    public function index(Product $product)
    {
        $data = [
            "average_rating" => round($product->reviews()->avg('rating'), 1),
            "review_count" => $product->reviews()->count(),
            "review" => ReviewResource::collection($product->reviews()->paginate(10))
            ];

        return $this->response($data);
    }

    public function store(Product $product, StoreReviewRequest $request)
    {
        $review = $product->reviews()->create([
            "user_id" => auth()->user()->id,
            "product_id" => $product->id,
            "rating" => $request->rating,
            "body" => $request->body,
        ]);
        return $this->success("Successfully Created", $review);

    }
}
