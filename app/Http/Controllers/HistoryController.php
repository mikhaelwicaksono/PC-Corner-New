<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HistoryController extends Controller
{
    public function view()
    {
        $cek_date = Carbon::now()->toDateTimeString();
        $requests = Requests::all();
        return view('history.history', compact('cek_date', 'requests'));
    }

    public function edit($request_id)
    {
        $requests = Requests::find($request_id);
        return view('history.edit', compact('requests'));
    }

    public function update(Request $request, $request_id)
    {
        $request_model = Requests::find($request_id);
        $img = $request->file('file');

        $nama_img = time() . "_" . $img->getClientOriginalName();

        $tujuan_upload = 'data_file';

        if ($request->has('file')) {
            if (File::exists('data_file/' . $request_model->img)) {
                File::delete('data_file/' . $request_model->img);
                $img->move($tujuan_upload, $nama_img);
            } else {
                $img->move($tujuan_upload, $nama_img);
            }
        }

        $request_model->users_id = Auth::user()->users_id;
        $request_model->type =  $request->type;
        $request_model->model_code = $request->model_code;
        $request_model->brand = $request->brand;
        $request_model->more_information = $request->more_information;
        $request_model->img =  $nama_img;
        $request_model->request_date =  Carbon::now()->toDateTimeLocalString();
        $request_model->expired_at = Carbon::now()->addMinutes(5)->toDateTimeLocalString();
        $request_model->save();

        return redirect()->back();
    }

    public function delete($request_id)
    {
        $request_model = Requests::find($request_id);
        if($request_model) {
            File::delete('data_file/' . $request_model->img);
            $request_model->delete();
        } else {
            $request_model->delete();
        }
        return redirect()->back();
    }
}
