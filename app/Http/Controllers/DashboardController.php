<?php

namespace App\Http\Controllers;

class DashboardController
{
    public function login()
    {
        return view('admin.login');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
