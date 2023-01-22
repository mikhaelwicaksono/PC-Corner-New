<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function showName()
    {
        $users = DB::select('SELECT * FROM users');
        return view('home',['users'=>$users]);
    }
}
