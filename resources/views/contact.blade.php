@extends('template.layout')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"
            style="background:transparent url('/assets/binus.png') no-repeat center center /cover">
            <div class="col-md-5 p-lg-9 mx-auto my-5">
                {{-- <img src="{{url('/assets/binus.png')}}" alt="" class="bg-img"> --}}
                <h1 class="display-4 fw-normal">Binus University</h1>
                <div class="d-flex flex-row mb-3 fw-bold">
                    <div class="p-2">Anggrek Campus</div>
                    <div class="p-2">Kijang Campus</div>
                    <div class="p-2">Syahdan Campus</div>
                </div>
                <div class="d-flex flex-row mb-3">
                    <div class="p-2">Jl. Kebon Jeruk Raya No. 27, Kebon Jeruk, Jakarta Barat 11530, Indonesia</div>
                    <div class="p-2">Jl. Kemanggisan Ilir III No. 45, Kemanggisan, Palmerah, Jakarta Barat 11480,
                        Indonesia</div>
                    <div class="p-2">Jl. K. H. Syahdan No. 9, Kemanggisan, Palmerah, Jakarta Barat 11480, Indonesia</div>
                </div>
                <a class="btn btn-primary" href="https://binus.ac.id/" target="_blank">Visit Website</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="row mx-auto text-center">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ url('/person/azhar.jpg') }}" alt="">
                <h4 class="fw-bold" style="margin-top: 10px">AZHAR BAGOES FAISHAL</h4>
                <p>Email : azhar.faishal@binus.ac.id</p>
                <p style="margin-top: -20px">Phone Number :</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ url('/person/juan.jpg') }}" alt="">
                <h4 class="fw-bold" style="margin-top: 10px">JUANICO WIJAYA KUSUMA</h4>
                <p>Email : juanicowijayakusuma123@gmail.com</p>
                <p style="margin-top: -20px">Phone Number : +6287778072773</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ url('/person/ken.jpg') }}" alt="">
                <h4 class="fw-bold" style="margin-top: 10px">KEN VIRIYA</h4>
                <p>Email : ken.viriya001@binus.ac.id</p>
                <p style="margin-top: -20px">Phone Number : +628991243388</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ url('/person/mikhael.jpg') }}" alt="">
                <h4 class="fw-bold" style="margin-top: 10px">MIKHAEL WICAKSONO MESTOKO</h4>
                <p>Email : mikhael.mestoko@binus.ac.id</p>
                <p style="margin-top: -20px">Phone Number : +6281389500320</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ url('/person/fiqri.jpg') }}" alt="">
                <h4 class="fw-bold" style="margin-top: 10px">MUHAMMAD FIQRI FEBRIANSYAH</h4>
                <p>Email : muhammad.febriansyah002@binus.ac.id</p>
                <p style="margin-top: -20px">Phone Number : +6282232103725</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
@endsection
