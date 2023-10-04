<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Models\UserAddress;

class UserAddressController extends Controller
{

    public function index()
    {
        return auth()->user()->userAddresses;
    }


    public function store(StoreUserAddressRequest $request)
    {
        auth()->user()->userAddresses()->create($request->toArray());
        return response()->json([
            "success" => true
        ]);
    }


    public function show(UserAddress $userAddress)
    {
        //
    }


    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAddress $userAddress)
    {
        if (UserAddress::where("id", $userAddress->id)->exists()) {
            UserAddress::where("id", $userAddress->id)->delete();
            return response()->json([
                "success" => true
            ]);
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "address ]not found in this user"
            ]);
        }
    }
}
