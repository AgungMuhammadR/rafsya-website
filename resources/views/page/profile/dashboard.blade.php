@extends('layout.main')

@section('container')
    <div class="content mt-5" style="padding-left: 65px;">
        <div class="profile">
            <div class="row">
                <div class="card-body">
                    <a href="{{ url('profile') }}" class="nav-link">
                        <h4 class="profil" style="color: #828599;">Profil</h4>
                    </a>
                    <a href="{{ url('profile/product') }}" class="nav-link">
                        <h4 class="produk" style="color: #828599;">Product</h4>
                    </a>
                    <a href="{{ url('profile/dashboard') }}" class="nav-link">
                        <h4 class="dashboard" style="color: #1ACBAA;">Dashboard</h4>
                    </a>
                </div>

                <div class="col-md-10">
                    <h2 style="color: #002678;"> Hallo, Frans </h2>
                    <p> Selamat datang di dashboard Anda ! </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="font-weight-bold mb-3 text-center">Produk Terjual</h5>
                                </div>
                                <div class="card-body">
                                    <h2 class="font-weight-bold mb-3 text-center"> </b> {{ $product_sold }} </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="font-weight-bold mb-3 text-center">Semua Produk</h5>
                                </div>
                                <div class="card-body">
                                    <h2 class="font-weight-bold mb-3 text-center"> </b> {{ $all_product }} </h2>
                                </div>
                            </div>
               
                        </div>
                        <div class="col-sm-6">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="font-weight-bold mb-3 text-center">Your Earning this month </h5>
                                </div>
                                <div class="card-body">
                                    <h2 class="font-weight-bold mb-3 text-center">{{ 'Rp.' . number_format($sum, 0, ',', '.') }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-5" style="border:none;">

                        <table id="shoppingCart" class="table table-condensed table-responsive">
                            <thead>
                                <tr>
                                    <th style="width:65%">Produk</th>
                                    <th style="width:30%">Tanggal</th>
                                    <th style="width:5%;text-align: right;">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <h5 style="color: #002678;"> List Produk Terjual </h5>
                                @foreach ($transactions as $transaction)
                                    @foreach ($transaction['detail'] as $item)
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-md-3 text-left">
                                                        <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                            class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                                    </div>
                                                    <div class="col-md-9 text-left mt-sm-2">
                                                        <h6>{{ $item->product_name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Date">{{ $transaction['date'] }}</td>
                                            <td class="actions" data-th="">
                                                <div class="text-right">
                                                    <p>{{ 'Rp.' . number_format($item->product_price, 0, ',', '.') }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
