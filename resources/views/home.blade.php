@extends('layouts.app')

@section('content')
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
                                    <a href="{{ route('detail.produk') }}" class="btn btn-primary">Tambah Ke Keranjang</a>
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
@endsection