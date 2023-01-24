@extends('template.layout')
@section('title', 'Edit Service')
@section('content')
<div class="card">
    <div class="card-header">Edit Service</div>
    <div class="card-body">
        <form action="{{ url('update-student/'.$requests->request_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="">Type</label>
                <input type="text" name="name" value="{{$requests->type}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Brand</label>
                <input type="text" name="email" value="{{$requests->brand}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Factory Model Code</label>
                <input type="text" name="course" value="{{$requests->model_code}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Describe Your Problem</label>
                <input type="text" name="section" value="{{$requests->more_information}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Photo</label>
                <input type="text" name="section" value="{{$requests->img}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Update Service Information</button>
            </div>
        </form>
    </div>
</div>
@endsection