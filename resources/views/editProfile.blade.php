@extends('template.layout')
@section('title', 'Profile')
@section('content')

    <div class="container">
        @foreach ($user as $b)
            <form action="/editingprofile/{{ $b->users_id }}" method="POST">
                @method('put')

                @csrf

                <div class="d-flex justify-content-md-center">
                    <h1>Update Profile</h1>
                </div>

                <div class="form-group my-3">
                    <label for="username">Username</label>
                    <input type="text" name="username"
                        class="form-control rounded-top @error('username') is-invalid @enderror" id="username"
                        value="{{ auth()->user()->username }}" required>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="email">Email</label>
                    <input type="email" name="email"
                        class="form-control rounded-top @error('email') is-invalid @enderror" id="email"
                        value="{{ auth()->user()->email }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="phonenumber">Phone</label>
                    <input type="text" name="phonenumber"
                        class="form-control rounded-top @error('phonenumber') is-invalid @enderror" id="phonenumber"
                        value="{{ auth()->user()->phonenumber }}" required>
                    @error('phonenumber')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="address">Address</label>
                    <input type="text" name="address"
                        class="form-control rounded-top @error('address') is-invalid @enderror" id="address"
                        value="{{ auth()->user()->address }}" required>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success w-20 my-3">Update</button>

                <a href="/profile/{{ $b->users_id }}" class="btn btn-outline-danger">Back</a>
            </form>
        @endforeach
    </div>

@endsection
