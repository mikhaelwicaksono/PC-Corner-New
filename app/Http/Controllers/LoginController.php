<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginUser(Request $req)
    {
        $credentials = $req->validate([
            'email' => 'required', 'email', 'string',
            'password' => 'required', 'string',
        ]);
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->withErrors(['password' => 'Wrong your email or password!',]);
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('login');
    }
}
