<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserController extends Controller
{
    public function index()
    {
        
        return view('layouts.main',);
    }
}
