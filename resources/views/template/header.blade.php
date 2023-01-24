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
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link link-light text-warning">Log
                    Out</a></li>
        </ul>

        <div class="col-md-3 text-end mx-auto">
            <button type="button" class="btn btn-primary"><a href="/profile/1"
                    class="nav-link link-light">Profile</a></button>
        </div>
    </header>
</div>
