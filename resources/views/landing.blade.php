<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PC-Corner</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    {{-- <div class="container-fluid bg-primary">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 mx-auto">
          <li class="nav-item"><a href="#" class="nav-link link-light">Get Started</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-light">About</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-light">Contact</a></li>
        </ul>
      </header>
    </div> --}}
    <div class="container-fluid">
        <img src="{{ url('/assets/pc.png') }}" class="opacity-25" alt="">
        <div class="container-fluid card-img-overlay text-center" style="margin-top: 20%">
            <img src="{{ url('/assets/logo.png') }}" style="width: 25%; height: 15%;" alt="">
            <p class="fs-1 fw-bold">Get Started And We Will Help </p>
            <p class="fs-1 fw-bold" style="margin-top: -25px">You Fix Your PC Problem</p>
            <a href="{{ route('register') }}" class="btn btn-primary fs-5">Get Started</a>
        </div>
    </div>

    <div class="container-lg" style="margin-top: 60px">
        <h1>About Us</h1>
        <p class="fs-5 col-md-8 text-wrap">PC-Corner is a website created to help you fix problems on your computer or
            laptop by offering a service. You can easily fill out a service submission form and wait for a response from
            us. We will provide a solution to you based on the detailed problem information that you wrote on the
            service submission form. We will provide our best service just for you</p>
    </div>

    <div class="container" style="margin-top: 60px">
        <h1 class="d-flex justify-content-end">Our Contact</h1>
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
                    <div class="p-2">Jl. K. H. Syahdan No. 9, Kemanggisan, Palmerah, Jakarta Barat 11480, Indonesia
                    </div>
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
                <p>Email :</p>
                <p style="margin-top: -20px">Phone Number :</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ url('/person/juan.jpg') }}" alt="">
                <h4 class="fw-bold" style="margin-top: 10px">JUANICO WIJAYA KUSUMA</h4>
                <p>Email :</p>
                <p style="margin-top: -20px">Phone Number :</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ url('/person/ken.jpg') }}" alt="">
                <h4 class="fw-bold" style="margin-top: 10px">KEN VIRIYA</h4>
                <p>Email :</p>
                <p style="margin-top: -20px">Phone Number :</p>
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
