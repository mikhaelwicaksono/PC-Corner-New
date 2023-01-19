<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container text-bg-primary p-3">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <img style ="height: 50%; width: 40%" src="{{url('/assets/logo-light.png')}}" alt="">
          </a>
    
          <ul class="nav nav-pills mx-auto">
            <li class="nav-item"><a href="#" class="nav-link link-light">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-light">Request Service</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-light">History</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-light">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-light">Contact</a></li>
          </ul>
        </header>
      </div>
    <div class="b-example-divider"></div>
    <main class="py-4">
        @yield('content')
    </main>
    <footer>

    </footer>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
