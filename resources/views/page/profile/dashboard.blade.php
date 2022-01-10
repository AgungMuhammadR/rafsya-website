<?php

use App\Models\Design;

function getName($name)
{
    $data = Design::with('owner')
        ->where('name', $name)
        ->first();
    return $data->owner->username;
}

?>

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
                    <h2 style="color: #002678;"> Hallo, {{ auth()->user()->username }} </h2>
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
                                    <h2 class="font-weight-bold mb-3 text-center">
                                        {{ 'Rp.' . number_format($income, 0, ',', '.') }}</h2>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#withdrawIncome">Tarik Penghasilan Anda</button>
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
                                    @foreach ($transaction['detail'] as $key => $item)
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-md-3 text-left">
                                                        @if (empty($item->product_photo))
                                                            <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                                class="img-fluid d-none d-md-block rounded mb-2 shadow "
                                                                width="auto" height="250">
                                                        @else
                                                            <img src="{{ asset('designs/' . getName($item->product_name) . '/' . $item->product_name . '/' . $item->product_photo[0]) }}"
                                                                alt=""
                                                                class="img-fluid d-none d-md-block rounded mb-2 shadow "
                                                                width="auto" height="250">
                                                        @endif
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


    <div class="modal fade" id="withdrawIncome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('withdraw.income.post') }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tarik Pendapatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="totalWithdraw" class="col-form-label">Jumlah Penarikan</label>
                            <input type="text" class="form-control @error('total') is-invalid @enderror" id="totalWithdraw"
                                name="total" autocomplete="off">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="withdrawAll" value="{{ $income }}"
                                autocomplete="off">
                            <label class="form-check-label" for="withdrawAll">Tarik Semua</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tarik</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    @if (count($errors) > 0)
        <script type="text/javascript">
            $('#withdrawIncome').modal('show');
        </script>
    @endif

    <script>
        $('#withdrawAll').click(function() {
            const isChecked = $(this).is(':checked')
            if (isChecked) {
                var totalIncome = $('#withdrawAll').val()
                $('#totalWithdraw').val(totalIncome)
            }
        })
    </script>
@endpush
