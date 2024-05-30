<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] === 'admin' && $credentials['password'] === '1234') {
            // Jika kredensial valid, redirect ke halaman yang sesuai
            return redirect()->intended('/dashboard');
        }

        // Jika kredensial tidak valid, redirect kembali dengan pesan error
        return redirect()->back()->withInput()->withErrors(['error' => 'Username atau password salah.']);
    }
}
