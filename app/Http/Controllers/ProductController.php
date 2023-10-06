<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

//        return Product::all();
//        return Product::with('stocks')->cursorPaginate(25);
        return ProductResource::collection(Product::cursorPaginate(25));
    }



    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        return Product::with("stocks")->find($id);
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
