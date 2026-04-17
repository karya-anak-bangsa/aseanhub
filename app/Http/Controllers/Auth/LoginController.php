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
        // logout semua guard
        Auth::guard('admin')->logout();
        Auth::guard('judges')->logout();
        Auth::guard('participants')->logout();
        Auth::guard('voters')->logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('aseanhub');
    }
}
