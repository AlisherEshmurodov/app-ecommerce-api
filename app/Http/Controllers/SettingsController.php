<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
use App\Http\Resources\SettingResource;
use App\Models\Settings;

class SettingsController extends Controller
{

    public function index()
    {
        return $this->response(SettingResource::collection(Settings::all()));
    }


    public function store(StoreSettingsRequest $request)
    {
        //
    }


    public function show(Settings $settings)
    {
        //
    }


    public function update(UpdateSettingsRequest $request, Settings $settings)
    {
        //
    }


    public function destroy(Settings $settings)
    {
        //
    }
}
