<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class DashboardController
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        return redirect("/dashboard")->with('success', 'Ingelogd');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
