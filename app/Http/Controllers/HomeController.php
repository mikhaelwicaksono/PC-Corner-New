<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    public function showName()
    {
        $user = User::where('users_id', Auth::user()->users_id)->first();
        return view('home', compact('user'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
