@extends('layout.auth_main')

@section('container')
    <div class="card-body">
        <img src="{{ asset('/images/logo.png') }}" alt="">

        <div class="d-lg-flex half">

            <div class="bg order-1 order-md-2 test">
                <img src="{{ asset('images/side_right.jpg') }}" alt="">
            </div>

            <div class="contents order-2 order-md-1">

                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-10">

                            <div class="d-flex mb-5 align-items-center">
                                <h3>Masuk</h3>
                                <span class="ml-auto"><a href="/register" class="login">Daftar</a></span>
                            </div>

                            <form action="#" method="post">
                                <div class="form-group first">
                                    <label for="username">Nomor Ponsel atau Email</label>
                                    <input type="text" class="form-control" id="username">

                                </div>

                                <div class="form-group last mb-3">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password">
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                                <div class="d-flex mb-5 align-items-center">
                                    <span class="caption">Lupa kata sandi?</span>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Klik
                                            Disini</a></span>
                                </div>

                                <span class="d-block text-center my-4 text-muted">&mdash; Atau masuk dengan
                                    &mdash;</span>

                                <div class="social-login">
                                    <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                        <span class="icon-facebook mr-3"></span>Facebook
                                    </a>
                                    <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                        <span class="icon-google mr-3"></span>Google
                                    </a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
