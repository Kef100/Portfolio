<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class DashboardController
{
    public function index()
    {
        if(Auth::check()) {
            return redirect('/dashboard');
        }
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password], $request->remember)) {
            $request->session()->regenerate();

            return redirect('/dashboard')->with('success', 'You have been logged in!');
        }
        return redirect('/admin')->with('error', 'Invalid credentials!');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
