<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Models\UserAddress;

class UserAddressController extends Controller
{

    public function index()
    {
        return $this->response(auth()->user()->userAddresses);
    }


    public function store(StoreUserAddressRequest $request)
    {
        $userAddress =  auth()->user()->userAddresses()->create($request->toArray());
        return $this->success("User Address successfully created", $userAddress);
    }


    public function show(UserAddress $userAddress)
    {
        return $this->response($userAddress);
    }


    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }


    public function destroy(UserAddress $userAddress)
    {
        if (auth()->user()->userAddresses()->where("user_id", $userAddress->user_id)->exists()) {
            UserAddress::where("id", $userAddress->id)->delete();
            return $this->success("Successfully deleted");
        }
        else {
            return $this->error("address not found in this user");
        }
    }
}
