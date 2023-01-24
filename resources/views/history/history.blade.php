@extends('template.layout')

@section('content')
    <div class="container">

        @if (empty($requests))
            <p>You haven't done any activity yet</p>
        @endif

        <div class="row">
            @foreach ($requests as $req)
                <div class="col-sm-6 mb-3 mb-sm-0 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Type: {{ $req->type }}</h5>
                            <h5 class="card-title">Brand: {{ $req->brand }}</h5>
                            <p>{{ $req->model_code }}</p>
                            <p class="card-text">Description: {{ $req->more_information }}</p>

                            <div class="d-flex">
                                <a href="{{route('history.edit',$req->request_id)}}"
                                    class="btn btn-primary {{ $req->expired_at <= $cek_date ? 'd-none' : '' }}">Edit</a>
                                <a href="{{route('history.delete',$req->request_id)}}" class="btn btn-danger mx-2 {{ $req->expired_at <= $cek_date ? 'd-none' : '' }}">Delete</a>

                            </div>
                        </div>
                        <div class="card-footer">
                            <h6>
                                {{$req->expired_at <= $cek_date ? 'We have received your request' : 'We will process your request'}}
                                {{ $req->expired_at->diffForHumans() }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
            <p></p>

        </div>
    @endsection