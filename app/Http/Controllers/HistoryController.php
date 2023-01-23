<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistoryController extends Controller
{
    public function view()
    {
        $requests = DB::select('SELECT * FROM requests');
        return view('history',['requests'=>$requests]);
    }
}
