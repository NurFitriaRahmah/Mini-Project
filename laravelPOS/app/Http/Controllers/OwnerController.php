<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        
            return view('owner.index');
        
    }
}
