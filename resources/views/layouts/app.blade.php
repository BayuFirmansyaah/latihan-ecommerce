<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
</head>

<body>

    {{-- header --}}
    <header class="p-3 text-bg-dark bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="40" height="40">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Best Product</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Sales</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Promotion</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-light"
                        placeholder="Masukan Nama Barang" aria-label="Search">
                </form>

                <div class="text-end">
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button type="button" class="btn btn-warning">Register</button>
                    </a>
                </div>
            </div>
        </div>
    </header>
    {{-- header --}}


    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
