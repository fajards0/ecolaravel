@extends('layouts.user')
@section('content')


    <!--------------- products-info-section--------------->
    <section class="product product-info">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index.html">Beranda</a></span>
                <span class="devider">/</span>
                <span><a href="product-sidebar.html">Toko</a></span>
                <span class="devider">/</span>
                <span><a href="#">Detail Produk</a></span>
            </div>
            <div class="product-info-section">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="product-info-img" data-aos="fade-right">
                            <div class="swiper product-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slider-top-img">
                                        <img src="{{ asset('images/produk/' . $produk->gambar) }}" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info-content" data-aos="fade-left">
                            <span class="wrapper-subtitle">Tanaman</span>
                            <h3 class="wrapper-heading">{{ $produk->nama_produk }}
                            </h3>
                            <div class="price">
                                <span class="new-price">Rp.{{ $produk->harga }}</span>
                            </div>
                            <p class="content-paragraph">{{ $produk->deskripsi }}</p>
                            <hr>
                            <div class="product-availability">
                                <span>Jumlah : </span>
                                <span class="inner-text">{{ $produk->stok }} Jumlah Produk</span>
                            </div>
                            <div class="product-quantity">
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_produk" value="{{ $produk->id }}">
                                    <div class="product-quantity">
                                        <div class="quantity-wrapper">
                                            <div class="quantity">
                                                <span class="minus">-</span>
                                                <input type="text" name="quantity" value="1"> <!-- Default quantity -->
                                                <span class="plus">+</span>
                                            </div>
                                        </div>
                                        <button type="submit" class="shop-btn">
                                            <span>Tambah Ke Keranjang</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- products-info-end--------------->

@endsection
