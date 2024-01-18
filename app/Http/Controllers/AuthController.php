<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
