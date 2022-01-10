@extends('layout.main')

@section('container')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #fff;">
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                <li class="breadcrumb-item"><a href="#" style="color: #1ACBAA">Buka Toko</a></li>
            </ol>
        </nav>
    </div>
    <div class="container text-center" style="margin-top: 100px;">
        <img src="{{ asset('images/payment.gif') }}" alt="">
        <h4 class="font-weight-bold mt-4"> Yeay! Toko Anda Berhasil Dibuat</h4>
    </div>
    <div class="" style="margin-top:2.5%;">
        <div class="text-md-center">
            <a href="{{ url('/profile') }}" style="color: #1ACBAA;">Back to profile</a>
        </div>
    </div>
@endsection
