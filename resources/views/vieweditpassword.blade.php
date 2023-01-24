@extends('template.layout')
@section('title', 'Password')
@section('content')
    @foreach ($user as $p)
        <form class="Forum" method="POST" action="/executedpassword/{{ $p->users_id }}"
            style="background-color:rgb(91, 91, 229)">
            @csrf
            <div class="judul" style="text-align:center; color: white">
                <h2>Update Password</h2>
            </div>

            <div class="forum-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                @elseif (session('error'))
                    {
                    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                    }
                @endif

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: white;">Old Password</label>
                <input type="password" name="oldpassword"
                    class="form-control @error('oldpassword')
                is-invalid
                @enderror"
                    id="password" placeholder="Old Password">
                @error('oldpassword')
                    <span class="textdanger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label" style="color: white;">New Password</label>
                <input type="password" name="newpassword" class="form-control" id="password" placeholder="New Password"
                    value={{ $p->password }}>
            </div>
            <div class="container">
                <div class="btn-group mx-auto">
                    <button type="submit" class="btn btn-primary">Save Update</button>
                    <a class="btn btn-primary" href="/home"
                        style="display:inline-block;vertical-align:top; padding-left:0.7%; color:white; background-color:rgb(56, 77, 213)">Back</a>
                </div>
            </div>
        </form>
    @endforeach
@endsection
