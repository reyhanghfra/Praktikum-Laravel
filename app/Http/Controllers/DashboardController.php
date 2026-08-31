<?php

namespace App\Http\Controllers;

class DashboardController extends Controllers
{
    public function index()
    {
        return view('dashboard');
    }
}

