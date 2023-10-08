<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function response($message = null, $data = null)
    {

    }


    public function success($message = null, $data = null)
    {

    }

    public function error($message = null, $data = null)
    {

    }
}
