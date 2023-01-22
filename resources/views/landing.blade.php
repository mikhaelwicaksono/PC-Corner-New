<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PC-Corner</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-primary">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 mx-auto">
          <li class="nav-item"><a href="#" class="nav-link link-light">Get Started</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-light">About</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-light">Contact</a></li>
        </ul>
      </header>
    </div>
    <div class="container-fluid">
        <img src="{{url('/assets/pc.jpg')}}" class="opacity-25" alt="">
        <div class="container-fluid card-img-overlay text-center" style="margin-top: 20%">
            <img src="{{url('/assets/logo.png')}}" style="width: 25%; height: 15%;" alt="">
            <p class="fs-1 fw-bold">Get Started And We Will Help </p>   
            <p class="fs-1 fw-bold" style="margin-top: -25px">You Fix Your PC Problem</p>
            <a href="{{route('register')}}" class="btn btn-primary fs-5">Get Started</a>
        </div>
    </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
