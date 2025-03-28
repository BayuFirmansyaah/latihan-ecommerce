@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="thumbnail-produk mb-5">
                    <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/910005092_BLACK_1_90a7.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="detail-produk">
                    <h2 class="title-produk">Provo</h2>
                    <h3 class="price-produk">Rp 439.000</h3>
                    <h3 class="stock-produk">Stock : 3</h3>
                    <p class="description-produk">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore similique earum magnam. Voluptatibus itaque esse, maxime odit dolorem provident libero quis molestiae exercitationem est numquam non sequi fugiat, saepe fuga?
                    </p>
                    <div class="input-jumlah">
                        <label for="">Jumlah Dibeli</label>
                        <div class="wrap-counting">
                            <button>-</button>
                            <input type="numeric" value="0">
                            <button>+</button>
                        </div>
                    </div>
                    <button class="checkout">Tambahkan Kedalam Keranjang</button>
                </div>
            </div>
        </div>
    </div>
@endsection