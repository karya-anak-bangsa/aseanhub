<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        # step 1. Check request
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        # step 2. Check hak akses
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        if (Auth::guard('judges')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('judges.dashboard');
        }

        if (Auth::guard('participants')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('participants.dashboard');
        }

        if (Auth::guard('voters')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('voters.dashboard');
        }

        return back()->withErrors([
            'email' => 'Make sure your email and password are correct',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        // Daftar guard yang kita pakai
        $guards = ['admin', 'judges', 'participants', 'voters'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
                break;
            }
        }

        // foreach (['admin', 'judges', 'participants', 'voters'] as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         Auth::guard($guard)->logout();
        //     }
        // }

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
