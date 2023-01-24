@extends('template.layout')
@section('title', 'Profile')
@section('content')

    @foreach ($profile as $b)
        <div class="container">
            <div class="card mx-auto" style="width: 30rem; text-align:center; justify-content:center">
                <div class="title">

                    <a> Profile Data </a>
                </div>
                <a>Username : {{ $user->username }}</a>
                <a>Email : {{ $user->email }}</a>
                <a>Address : {{ $user->address }}</a>
                <a>Phone : {{ $user->phonenumber }}</a>
                <a></a>
                <div class="btn-group">
                    <a href="/updatepassword/{{ $user->users_id }}" class="btn btn-secondary"
                        style="display:inline-block;vertical-align:top; padding-left:0.7%; color:white; background-color:rgb(56, 77, 213); justify-content:center">Edit
                        Password</a>
                    <a href="/editprofile/{{ $user->users_id }}" class="btn btn-primary"
                        style="display:inline-block;vertical-align:top">Edit Profile</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
