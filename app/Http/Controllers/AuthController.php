<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] == 'admin' && $credentials['password'] == '1234') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Invalid username or password');
        }
    }
}
