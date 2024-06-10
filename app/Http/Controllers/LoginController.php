<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role_id === 1) {
                return redirect()->intended('admin');
            }

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'NIP/NUP atau kata sandi tidak sesuai.',
        ])->onlyInput('username');
    }
}
