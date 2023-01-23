@extends('template.auth')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-warning">{{ $err }}</p>
                    @endforeach
                @endif
                <div class="card mt-3">
                    <div class="card-body" style="background-color: dodgerblue; color: white">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="title text-center mb-4">
                                <h1>Sign Up</h1>
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="your username"
                                    value="{{ old('username') }}" />
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="your email" />
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="password min. 6 char" />
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label class="form-label">Phone Number</label>
                                <input type="phonenumber" name="phonenumber" class="form-control"
                                    placeholder="phone number. 10-13 num"/ value="{{ old('phonenumber') }}" />
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="your address"
                                    value="{{ old('address') }}" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn d-grid gap-2 col-6 mx-auto mb-4"
                                    style="background-color: blue; color: white">Sign Up</button>
                            </div>
                            <div id="button" class="form-text text-center mb-4" style="color: white">Already Registered?
                                <a href="{{ route('login') }}" style="color: rgb(0, 255, 251)">Sign in here</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
