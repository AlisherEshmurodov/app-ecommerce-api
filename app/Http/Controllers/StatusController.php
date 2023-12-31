<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has("for")){
            return Status::where("for", $request->for)->get();
        }
        return Status::all();
    }


    public function store(StoreStatusRequest $request)
    {
        //
    }


    public function show(Status $status)
    {
        //
    }


    public function update(UpdateStatusRequest $request, Status $status)
    {
        //
    }


    public function destroy(Status $status)
    {
        //
    }
}
