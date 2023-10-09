<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function response($data = null)
    {
        return response()->json([
            "data" => $data
        ]);
    }


    public function success($message = null, $data = null)
    {
        return response()->json([
            "success" => true,
            "status" => "success",
            "message" => $message ? $message : "operation successfully",
            "data" => $data ? $data : ""
        ]);
    }

    public function error($message = null, $data = null)
    {
        return response()->json([
            "success" => false,
            "status" => "error",
            "message" => $message ? $message : "error occurred",
            "data" => $data ? $data : ""
        ]);
    }
}
