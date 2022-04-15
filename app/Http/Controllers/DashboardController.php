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
        if (Auth::attempt(["email" => $request->email, "password" => $request->password], $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended('admin.dashboard')->with('success', 'You are logged in!');
        }

        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
