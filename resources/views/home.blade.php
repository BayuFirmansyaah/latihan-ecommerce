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
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="40" height="40">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Best Product</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Sales</a></li>
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

    {{-- hero section --}}
    <section class="hero">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/slider4.webp') }}" class="d-block w-100" style="height: 100%"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/slider1.webp') }}" class="d-block w-100" style="height: 100%"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/slider2.webp') }}" class="d-block w-100" style="height: 100%"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/slider3.webp') }}" class="d-block w-100" style="height: 100%"
                        alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- hero section --}}


    {{-- Best Seller Produk --}}
    <section class="best-seller">
        <div class="container">
            <div class="row">
                {{-- untuk data judul --}}
                <div class="col-12 mb-4">
                    <h1 class="title-primary">Best Seller Product</h1>
                </div>
                {{-- untuk data judul --}}

                {{-- untuk data produk --}}
                <div class="col-12">
                    <div class="row">
                        {{-- list product --}}
                        <div class="col-3 mb-3">
                            <div class="card w-100">
                                <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/910005092_BLACK_1_90a7.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PROVO</h5>
                                    <p class="card-text">Rp. 439.000</p>
                                    <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="card w-100">
                                <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/537369033c9c58db3de451bf26319ada.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">X WS RUNE INNER HIJAB</h5>
                                    <p class="card-text">Rp 99.000</p>
                                    <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="card w-100">
                                <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/1c3bc871706050f1ee9ab842461f29cf.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">DAYTOUR LAPTOP BP 20L</h5>
                                    <p class="card-text">Rp 859.000</p>
                                    <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="card w-100">
                                <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/3fe88f371d62696cc2166c60150207b2.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">WS MAPLES LS TEES</h5>
                                    <p class="card-text">Rp 189.000</p>
                                    <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
                                </div>
                            </div>
                        </div>
                        {{-- list product --}}
                    </div>
                </div>
                {{-- untuk data produk --}}
            </div>
        </div>
    </section>
    {{-- Best Seller Produk --}}

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
