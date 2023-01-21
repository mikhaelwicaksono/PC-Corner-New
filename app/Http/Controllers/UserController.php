<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('auth.register', $data);
    }
    public function register_auth(Request $req)
    {
        $req->validate([
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'phonenumber' => 'required',
            'address' => 'required',
        ]);
        $user = new User([
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'phonenumber' => $req->phonenumber,
            'address' => $req->address,
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration has been succed!');
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('auth.login', $data);
    }
    public function login_auth(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string'],
        ]);
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->withErrors(['password' => 'Wrong your email or password!',]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function viewupdate($s)
    {
        $userid = DB::table('users')->where('users_id','LIKE',$s)->get();
        return view('vieweditpassword',['user' => $userid]);
    }


    /**
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updatingpassword(Request $request, $l)
    {
    $data = DB::table('users')->where('users_id','LIKE',$l)->get('password')->first()->password;
    $c = $request->oldpassword;
    $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
    ]);

    if((string) $c != (string) $data){
        return back()->with("Error","Old Password Don't Match");
    }

    $datafinal = DB::table('users')->where('users_id','LIKE',$l)->update([
        'password' => $request->newpassword
    ]);
    return back()->with("status","Password Changed Successfully !!", $datafinal);
    }
    

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}