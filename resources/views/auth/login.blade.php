@extends('layouts.user')

@section('content')
    <!--------------- login-section --------------->
    <section class="login product footer-padding">
        <div class="container">
            <div class="login-section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="login-form">
                            <div class="review-form  box-shadows">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="review-form-text">
                                        <h5 class="comment-title">Log In</h5>
                                        <img src="https://quomodosoft.com/html/ecoshop/assets/images/homepage-one/vector-line.png"
                                            alt="img">
                                    </div>
                                    <div class="review-inner-form ">
                                        <div class="review-form-name">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="review-form-name">
                                            <label for="password" class="form-label">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="review-form-name checkbox">
                                            <div class="checkbox-item">
                                                <input type="checkbox">
                                                <span class="address">
                                                    Ingat Saya</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login-btn text-center">
                                        <button type="submit" class="shop-btn">Masuk</button>
                                        <span class="shop-account">Tidak Memiliki Akun ?<a href="{{url('register')}}">Buat
                                                Akun
                                            </a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-img">
                            <img src="https://quomodosoft.com/html/ecoshop/assets/images/homepage-one/account-img.webp"
                                alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- login-section-end --------------->
@endsection
