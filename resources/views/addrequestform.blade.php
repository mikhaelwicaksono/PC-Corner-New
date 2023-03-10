@extends('template.layout')
@section('title', 'Request Service')
@section('content')
    <div class="row" style="background-color:dodgerblue; color: white;">
        <div class="container">
            <h2 class="text-center my-5">Service Request Form</h2>

            <div class="col-lg-8 mx-auto my-5">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                        @endforeach
                    </div>
                @endif

                <form action="/load/{{ $numeric }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    {{-- <div class="form-group">
                        <b>Product Image</b><br />
                        <input type="file" name="file">
                    </div> --}}

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Type</label>
                        <textarea name="type" class="form-control" id="name" rows="1" aria-label="(5-20 letters)"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Brand</label>
                        <input name="brand" type="brand" class="form-control" id="brand"
                            aria-label="(min 5 letters)">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Factory Model Code</label>
                        <textarea name="model_code" class="form-control" id="model-code" type="model-code" value={{ $request->model_code }}
                            aria-label="Device Factory Model Code"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="quantity">Describe Your Problem</label>
                        <textarea name="more_information" class="form-control" id="string" aria-label="" rows="3"></textarea>
                    </div>

                    <p>Please provide a photo of the device so we can understand your case better</p><br />

                    <div class="form-group" style="margin-top: -30px; margin-bottom: 25px">
                        <input type="file" name="file">
                    </div>

                    <input type="submit" value="Add" class="btn" style="background-color: blue; color: white">
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
