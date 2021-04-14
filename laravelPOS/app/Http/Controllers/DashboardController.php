<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
        return view('layouts.main');
    }

    public function tampilkanSemuaSiswa()
    {
        
    }
}
