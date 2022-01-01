@extends('layout.auth_main')

@section('container')
    <div class="container">
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
                                    <h5 class="font-weight-bold text-muted">Daftar</h5>
                                    <span class="ml-auto"><a href="{{ url('login') }}"
                                            class="login">Masuk</a></span>
                                </div>

                                <form action="{{ route('register.post') }}" method="POST">
                                    @csrf
                                    <div class="form-group first">
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="Username Anda" style="font-size: 12px">
                                    </div>
                                    <div class="form-group second">
                                        <input type="text" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Email Anda" style="font-size: 12px">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            placeholder="Kata Sandi" style="font-size: 12px">
                                    </div>

                                    <button type="submit" class="btn btn-block btn-primary">Daftar</button>

                                    <span class="d-block text-center my-4 text-muted" style="font-size: 14px">&mdash; Atau
                                        daftar dengan
                                        &mdash;</span>

                                    <div class="social-login">
                                        <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                            <span class="icon-facebook mr-3"></span>Facebook
                                        </a>
                                        <a href="{{ url('auth/google') }}"
                                            class="google btn d-flex justify-content-center align-items-center">
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
    </div>
@endsection
