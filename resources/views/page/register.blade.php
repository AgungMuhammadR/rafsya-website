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
                                <h4>Daftar</h4>
                                <span class="ml-auto"><a href="/login" class="login">Masuk</a></span>
                            </div>

                            <form action="register" method="POST">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username Anda</label>
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group second">
                                    <label for="email">Email Anda</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-block btn-primary">Daftar</button>

                                <span class="d-block text-center my-4 text-muted">&mdash; Atau daftar dengan
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
