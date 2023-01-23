@extends('template.layout')
@section('title', 'History')
@section('content')
<div class="container">
    @foreach ($requests as $req)
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Type: {{$req->type}}</h5>
            <h5 class="card-title">Brand: {{$req->brand}}</h5>
            <p>{{$req->model_code}}</p>
            <p class="card-text">Description: {{$req->more_information}}</p>
            <a href="#" class="btn btn-primary">Edit</a><a href="#" class="btn btn-primary">Edit</a>
          </div>
        </div>
      </div>
    <p></p>
    @endforeach
</div>
@endsection
