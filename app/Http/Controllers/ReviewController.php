<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;

class ReviewController extends Controller
{

    public function index()
    {
        return auth()->user()->reviews()->with('product')->paginate(10);
    }


    public function store(StoreReviewRequest $request)
    {

    }


    public function show(Review $review)
    {
        //
    }


    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }


    public function destroy(Review $review)
    {
        //
    }
}
