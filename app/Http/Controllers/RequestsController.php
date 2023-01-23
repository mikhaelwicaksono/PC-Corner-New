<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function viewing(Requests $req,$b)
    {

        return view('addrequestform',[
            'request'=> $req,
            'numeric'=> $b,
        ]);
    }

    public function adding(Request $request, $c){
		$this->validate($request, [
			'file' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'model_code' => 'required',
            'more_information' => 'required',
		]);



        $img = $request->file('file');

        $nama_img = time()."_".$img->getClientOriginalName();

        $date = now()->format('Y-m-d');

        $tujuan_upload = 'data_file';


        $img->move($tujuan_upload,$img->getClientOriginalName());

        DB::insert('insert into requests (users_id, type, brand, model_code, more_information, img, request_date) values (?,?,?,?,?,?,?)',[
            $c,
            $request->type,
            $request->brand,
            $request->model_code,
            $request->more_information,
            $nama_img,
            $date,
        ]);

        return redirect()->back();
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *

     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
