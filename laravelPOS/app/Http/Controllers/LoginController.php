<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // protected function redirectTo( ) {
    //     if (JWTAuth::check() && JWTAuth::user()->role == 'cashier') {
    //         return('/cashier');
    //     }
    //     elseif (JWTAuth::check() && JWTAuth::user()->role == 'staff') {
    //         return('/staff');
    //     }
    //     else {
    //         return('/owner');
    //     }
    // }

    public function index()
    {
        return view('login.index');
    }
}
