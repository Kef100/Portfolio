<?php

namespace App\Http\Controllers;

class DashboardController
{
    public function login()
    {
        return view('auth.login');
    }

    public function index()
    {
        return view('auth.dashboard');
    }
}
