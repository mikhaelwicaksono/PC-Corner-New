@extends('template.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <div class="card mx auto">
                    <div class="card-body" style="background-color: dodgerblue; color: white">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="title text-center mb-5" style="color: white">
                                <h1>Login In</h1>
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="insert youremail@example.com" value="{{ old('email') }}" />
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="insert your password [password min. 6 characters]" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn d-grid gap-2 col-6 mx-auto mb-4"
                                    style="background-color: blue; color: white">Log in</button>
                            </div>

                            <div id="button" class="form-text text-center" style="height: 100px; color: white">Not
                                Register yet? <a href="register" style="color: blue">Register Now!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
