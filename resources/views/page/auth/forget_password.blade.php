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
                                    <h5 class="font-weight-bold text-muted">Lupa Password</h5>
                                    <span class="ml-auto"><a href="{{ url('/login') }}"
                                            class="login">Masuk</a></span>
                                </div>

                                <form action="{{ route('forget.password.post') }}" method="POST">
                                    @csrf
                                    <div class="form-group last mb-3">
                                        <input type="text" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Email Anda" style="font-size: 12px">
                                    </div>

                                    <button type="submit" class="btn btn-block btn-primary">Kirim Link Reset
                                        Password</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
