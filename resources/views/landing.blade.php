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
    <header>
        <div class="text-center bg-image" style="background-image: url('/person/pc.png');">
            <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                <div class="d-flex justify-content-center align-items-center" style="height: 700px">
                    <div class="text-light">
                        <a class="navbar-brand" href="/">
                            <img style="height: 50%; width: 50%" src="{{ url('/person/logo-light.png') }}"
                                alt="Logo">
                        </a>
                        <h5 class="mb-4">Get Started and We Will Help You Fix Your PC Problem</h5>
                        <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                            role="button" rel="nofollow" target="_blank">Get Started</a>
                    </div>
                </div>
            </div>
    </header>

    <main class="mt-5">
        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                            data-mdb-ripple-color="light">
                            <img src="{{ url('/person/syahdan.jpg') }}" class="img-fluid" />
                            <a href="">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>About Us</strong></h4>
                        <p class="text-muted">
                            PC-Corner is a website created to help you fix problems on your computer or laptop by
                            offering a
                            service. You can easily fill out a service submission form and wait for a response from us.
                            We
                            will provide a solution to you based on the detailed problem information that you wrote on
                            the
                            service submission form. We will provide our best service just for you
                        </p>
                        <p><strong>Binus University | Syahdan Campus</strong></p>
                        <p class="text-muted">
                            Jl. K. H. Syahdan No. 9, Kemanggisan, Palmerah, Jakarta Barat 11480, Indonesia
                        </p>
                    </div>
                </div>
            </section>

            <hr class="my-5" />

            <section class="text-center">
                <h4 class="mb-5"><strong>Our Contact</strong></h4>
                <div class="row mx-auto text-center">
                    <div class="col-lg-4 mb-3">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="{{ url('/person/azhar.jpg') }}" alt="">
                        <h4 class="fw-bold" style="margin-top: 10px">AZHAR BAGOES FAISHAL</h4>
                        <p>Email :</p>
                        <p style="margin-top: -20px">Phone Number :</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="{{ url('/person/juan.jpg') }}" alt="">
                        <h4 class="fw-bold" style="margin-top: 10px">JUANICO WIJAYA KUSUMA</h4>
                        <p>Email :</p>
                        <p style="margin-top: -20px">Phone Number :</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="{{ url('/person/ken.jpg') }}" alt="">
                        <h4 class="fw-bold" style="margin-top: 10px">KEN VIRIYA</h4>
                        <p>Email :</p>
                        <p style="margin-top: -20px">Phone Number :</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="{{ url('/person/mikhael.jpg') }}" alt="">
                        <h4 class="fw-bold" style="margin-top: 10px">MIKHAEL WICAKSONO MESTOKO</h4>
                        <p>Email : mikhael.mestoko@binus.ac.id</p>
                        <p style="margin-top: -20px">Phone Number : +6281389500320</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="{{ url('/person/fiqri.jpg') }}" alt="">
                        <h4 class="fw-bold" style="margin-top: 10px">MUHAMMAD FIQRI FEBRIANSYAH</h4>
                        <p>Email : muhammad.febriansyah002@binus.ac.id</p>
                        <p style="margin-top: -20px">Phone Number : +6282232103725</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
