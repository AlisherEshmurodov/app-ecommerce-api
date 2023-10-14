<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPaymentCardRequest;
use App\Http\Requests\UpdateUserPaymentCardRequest;
use App\Http\Resources\UserPaymentCardResource;
use App\Models\UserPaymentCard;

class UserPaymentCardController extends Controller
{

    public function index()
    {
        return $this->response(UserPaymentCardResource::collection(auth()->user()->userPaymentCards));
    }


    public function store(StoreUserPaymentCardRequest $request)
    {
        $card = auth()->user()->userPaymentCards()->create([
           "payment_card_type_id" => $request->payment_card_type_id,
           "name" => encrypt($request->name),
           "number" => encrypt($request->number),
           "exp_date" => encrypt($request->exp_date),
           "holder_name" => encrypt($request->holder_name),
           "last_four_number" => encrypt(substr($request->number, -4)),
        ]);

        return $this->success("Card Created Successfully", $card);
    }


    public function show(UserPaymentCard $userPaymentCard)
    {
        return $this->response(new UserPaymentCardResource($userPaymentCard));
    }


    public function update(UpdateUserPaymentCardRequest $request, UserPaymentCard $userPaymentCard)
    {
        //
    }


    public function destroy(UserPaymentCard $userPaymentCard)
    {
        //
    }
}
