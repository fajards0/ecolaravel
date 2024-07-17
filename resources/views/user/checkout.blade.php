@extends('layouts.user')
@section('content')
    <!--------------- blog-tittle-section---------------->
    <section class="blog about-blog">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="{{ route('home') }}">Beranda</a></span>
                <span class="devider">/</span>
                <span><a href="#">Checkout</a></span>
            </div>
            <div class="blog-heading about-heading">
                <h1 class="heading">Checkout</h1>
            </div>
        </div>
    </section>
    <!--------------- blog-tittle-section-end---------------->

    <!--------------- checkout-section---------------->
    <section class="checkout product footer-padding">
        <div class="container">
            <div class="checkout-section">
                <div class="row gy-5 gy-lg-0">
                    <div class="col-lg-6">
                        <div class="checkout-wrapper">
                            <div class="account-section billing-section box-shadows">
                                <h5 class="wrapper-heading">Pembayaran</h5>
                                <form action="{{ route('checkout.placeOrder') }}" method="POST">
                                    @csrf
                                    <div class="review-form">
                                        <div class="review-form-name address-form">
                                            <label for="address" class="form-label">Alamat</label>
                                            <input type="text" id="address" name="address" class="form-control" placeholder="Enter your Address" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="payment_method">Metode Pembayaran</label>
                                            <select name="payment_method" id="payment_method" class="form-control" required>
                                                <option value="Credit Card">Credit Card</option>
                                                <option value="Bank Transfer">Bank Transfer</option>
                                                <option value="Cash on Delivery">Cash on Delivery</option>
                                            </select>
                                        </div>
                                        <br>
                                        <a href="{{url('/')}}" class="shop-btn">Order Sekarang</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-wrapper">
                            <div class="account-section billing-section box-shadows">
                                <h5 class="wrapper-heading">Order Produk</h5>
                                <div class="order-summery">
                                    <div class="subtotal product-total">
                                        <h5 class="wrapper-heading">PRODUK</h5>
                                        <h5 class="wrapper-heading">TOTAL</h5>
                                    </div>
                                    <hr>
                                    <div class="subtotal product-total">
                                        <ul class="product-list">
                                            @foreach($carts as $cart)
                                                <li>
                                                    <div class="product-info">
                                                        <h5 class="wrapper-heading">{{ $cart->produk->nama_produk }} x{{ $cart->quantity }}</h5>
                                                        <p class="paragraph">{{ $cart->produk->deskripsi }}</p>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="wrapper-heading">{{ $cart->quantity * $cart->produk->harga }}</h5>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="subtotal product-total">
                                        <h5 class="wrapper-heading">SUBTOTAL</h5>
                                        <h5 class="wrapper-heading">{{ $carts->sum(fn($cart) => $cart->quantity * $cart->produk->harga) }}</h5>
                                    </div>
                                    <hr>
                                    <div class="subtotal total">
                                        <h5 class="wrapper-heading">TOTAL</h5>
                                        <h5 class="wrapper-heading price">{{ $carts->sum(fn($cart) => $cart->quantity * $cart->produk->harga) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- checkout-section-end---------------->
@endsection
