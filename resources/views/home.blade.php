@extends('template.layout')
@section('title', 'Home')
@section('content')
    <div class="container px-4 py-5" id="custom-cards">

        <h2 class="pb-2 border-bottom">Hi, {{ $user->username }}</h2>

        <div class="align-items-center">
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                        style="background-image: url('assets/service.png');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <a href="request/{b}" class="link-light">
                                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Request Service</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                        style="background-image: url('assets/activities.png');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <a href="history" class="link-light">
                                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Your Activities</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
