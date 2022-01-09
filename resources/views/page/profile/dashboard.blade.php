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

                    <div class="row">
                        <div class="col-sm-3">
                            <h1 style="color: #002678;"> Hallo, Frans </h1>
                            <p> Selamat datang di dashboard Anda ! </p>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold mb-3 text-center">Produk Terjual</h5>
                                    </br> </br>
                                    <h1 class="font-weight-bold mb-3 text-center"> </b> {{ $product_sold }} </h1>
                                    </br> </br>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            </br> </br> </br> </br>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold mb-3 text-center">Semua Produk</h5>
                                    </br> </br>
                                    <h1 class="font-weight-bold mb-3 text-center"> </b> {{ $all_product }} </h1>
                                    </br> </br>
                                </div>
                            </div>
                            </br> </br>
                        </div>
                        </br> </br>
                        <div class="col-sm-5">
                            </br> </br> </br> </br>
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="font-weight-bold mb-3 text-center">Your Earning this month </h5>
                                    </br> </br>
                                    <h2 class="font-weight-bold mb-3 text-center"> Rp. 18.000.000,00 </h2>
                                    </br>
                                    <button type="button" class="btn btn-outline-primary">Tarik Penghasilan Anda</button>
                                </div>
                            </div>
                        </div>
                        </br> </br>
                    </div>

                    <div class="card">
                        <table id="shoppingCart" class="table table-condensed table-responsive">
                            <thead>
                                <tr>
                                    <th style="width:65%">Produk</th>
                                    <th style="width:30%">Tanggal</th>
                                    <th style="width:5%;text-align: right;">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <h5> List Produk Terjual </h5>
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
