<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryMethodRequest;
use App\Http\Requests\UpdateDeliveryMethodRequest;
use App\Http\Resources\DeliveryMethodResource;
use App\Models\DeliveryMethod;

class DeliveryMethodController extends Controller
{

    public function index()
    {
        return DeliveryMethodResource::collection(DeliveryMethod::all());
    }


    public function store(StoreDeliveryMethodRequest $request)
    {
        //
    }


    public function show(DeliveryMethod $deliveryMethod)
    {
        //
    }


    public function update(UpdateDeliveryMethodRequest $request, DeliveryMethod $deliveryMethod)
    {
        //
    }


    public function destroy(DeliveryMethod $deliveryMethod)
    {
        //
    }
}
