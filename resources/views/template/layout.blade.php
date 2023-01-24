<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'PC-Corner')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-primary">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none mx-auto">
                <img style="height: 50%; width: 50%" src="{{ url('/assets/logo-light.png') }}" alt="">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 mx-auto">
                <li class="nav-item"><a href="/home" class="nav-link link-light">Home</a></li>
                <li class="nav-item"><a href="/request/{b}" class="nav-link link-light">Request Service</a></li>
                <li class="nav-item"><a href="/history" class="nav-link link-light">History</a></li>
                <li class="nav-item"><a href="/about" class="nav-link link-light">About</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link link-light">Contact</a></li>
            </ul>

            <div class="col-md-3 text-end mx-auto">
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 mx-auto">
                    <li class="nav-item"><a href="/profile/1" class="nav-link link-light">Profile</a></li>
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link link-light text-warning">Log Out</a></li>
                </ul>
            </div>
        </header>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    <footer>

    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
