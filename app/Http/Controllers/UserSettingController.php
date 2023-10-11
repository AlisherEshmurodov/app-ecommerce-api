<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserSettingRequest;
use App\Http\Requests\UpdateUserSettingRequest;
use App\Http\Resources\UserSettingResource;
use App\Models\Settings;
use App\Models\UserSetting;

class UserSettingController extends Controller
{

    public function index()
    {
        return $this->response(UserSettingResource::collection(auth()->user()->userSettings));
    }


    public function store(StoreUserSettingRequest $request)
    {
        if (auth()->user()->userSettings()->where("setting_id", $request->setting_id)->exists()){
            return $this->error("This setting already exist");
        }

        $settings = auth()->user()->userSettings()->create([
            "setting_id" => $request->setting_id,
            "value_id" => $request->value_id ?? null,
            "switch" => $request->switch ?? null,
        ]);

        return $this->success("Successfully created", $settings);
    }


    public function update(UpdateUserSettingRequest $request, UserSetting $userSetting)
    {
        $updatedSetting = $userSetting->update([
           "value_id" => $request->value_id ?? null,
           "switch" => $request->switch ?? null,
        ]);
        return $this->success("Successfully updated");
    }


    public function destroy(UserSetting $userSetting)
    {
        $userSetting->delete();
        return $this->success("Successfully deleted");
    }
}
