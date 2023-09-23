<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{


    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }


    public function index()
    {
        return auth()->user()->favorites()->paginate(6);
    }




    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }



    public function update(Request $request,  $id)
    {
        //
    }


    public function destroy( $id)
    {
        //
    }
}
