<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentCardTypeRequest;
use App\Http\Requests\UpdatePaymentCardTypeRequest;
use App\Models\PaymentCardType;

class PaymentCardTypeController extends Controller
{

    public function index()
    {
        return $this->response(PaymentCardType::all());
    }


    public function store(StorePaymentCardTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentCardType $paymentCardType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentCardType $paymentCardType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentCardTypeRequest $request, PaymentCardType $paymentCardType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentCardType $paymentCardType)
    {
        //
    }
}
