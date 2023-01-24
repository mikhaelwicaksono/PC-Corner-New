@extends('template.layout')

@section('content')
    <div class="container">
        <h2 class="text-center my-5">Edit Request Form</h2>

        <div class="col-lg-8 mx-auto my-5">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif

            <form action="{{route('history.update',$requests->request_id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group mb-2">
                    <b>Product Image</b><br />
                    <input type="file" name="file" accept="image/*" class="form-control">
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="name" value="{{$requests->type}}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control" id="brand" value="{{$requests->brand}}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Factory Model Code</label>
                    <input type="text" name="model_code" class="form-control" id="brand" value="{{$requests->model_code}}">
                </div>

                <div class="mb-3">
                    <label for="quantity">Description</label>
                    <textarea name="more_information" class="form-control" id="string" aria-label="" rows="3">{{$requests->more_information}}
                    </textarea>
                </div>
                <input type="submit" value="Add" class="btn" style="background-color: blue; color: white">
            </form>
        </div>
    </div>
@endsection
