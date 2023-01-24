<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use Illuminate\Http\Request;
use DB;

class HistoryController extends Controller
{
    public function view()
    {
        $requests = DB::select('SELECT * FROM requests');
        return view('history.history',['requests'=>$requests]);
    }

    public function edit($request_id)
    {
        $edit = Requests::find($request_id);
        return view('history.editHistory', compact(['edit']));
    }

    public function update(Request $request, $request_id)
    {
        $update = Requests::find($request_id);
        $update->type = $request->input('type');
        $update->brand = $request->input('brand');
        $update->model_code = $request->input('model_code');
        $update->more_information = $request->input('more_information');
        $update->img = $request->input('img');
        $update->update();
        return redirect()->back()->with('status','Your Service Updated Successfully');
    }

}
