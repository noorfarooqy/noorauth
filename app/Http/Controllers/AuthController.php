<?php

namespace Noorfarooqy\NoorAuth\Http\Controllers;

use Illuminate\Http\Request;
use Noorfarooqy\NoorAuth\Services\AuthServices;

class AuthController extends Controller
{
    //
    public function loginAuth(Request $request, AuthServices $authServices)
    {
        return $authServices->login($request);
    }


    public function registerAuth(Request $request, AuthServices $authServices)
    {
        return $authServices->register($request);
    }
}
