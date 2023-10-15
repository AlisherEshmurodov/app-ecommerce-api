<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return $this->response(Category::all());
    }

    public function show(Category $category)
    {
        return $this->response(new CategoryResource($category));
    }

    public function store(StoreCategoryRequest $request)
    {

    }

}
