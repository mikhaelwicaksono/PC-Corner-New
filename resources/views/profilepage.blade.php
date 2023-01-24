@extends('template.layout')
@section('title', 'Profile')
@section('content')

    @foreach ($profile as $b)
        <div class="container">
            <div class="card mx-auto" style="width: 30rem; text-align:center; justify-content:center">
                <div class="title">

                    <h4> Profile Data </h4>
                </div>
                <a>Username : {{ $b->username }}</a>
                <a>Email : {{ $b->email }}</a>
                <a>Address : {{ $b->address }}</a>
                <a>Phone : {{ $b->phonenumber }}</a>
                <a></a>
                <div class="btn-group">
                    <a href="/updatepassword/{{ $b->users_id }}" class="btn btn-secondary"
                        style="display:inline-block;vertical-align:top; padding-left:0.7%; color:white; background-color:rgb(56, 77, 213); justify-content:center">Edit
                        Password</a>
                    <a href="/editprofile/{{ $b->users_id }}" class="btn btn-primary"
                        style="display:inline-block;vertical-align:top">Edit Profile</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
