@extends('template.layout');
@section('title', 'Profile')
@section('content')

    <div class="container">
        <form action="{{ route('Update Profile') }}">
            @method('put')

            @csrf

            <div class="d-flex justify-content-md-center">
                <h1>Update Profile</h1>
            </div>

            <div class="form-group my-3">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror"
                    id="username" value="{{ auth()->user()->username }}" required>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group my-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror"
                    id="email" value="{{ auth()->user()->email }}" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group my-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control rounded-top @error('phone') is-invalid @enderror"
                    id="phone" value="{{ auth()->user()->phone }}" required>
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group my-3">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control rounded-top @error('address') is-invalid @enderror"
                    id="address" value="{{ auth()->user()->address }}" required>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success w-20 my-3">Update</button>

            <a href="/profile" class="btn btn-outline-danger">Back</a>
        </form>
    </div>

@endsection
