@extends('layout.main')

@section('container')
    <div class="content mt-5" style="padding-left: 65px;">
        <div class="profil">
            <div class="row">
                <div class="bg-transparent">
                    <div class="card-body">
                        <a href="{{ url('profile') }}" class="nav-link">
                            <h4 class="profil" style="color: #828599;">Profile</h4>
                        </a>
                        <a href="{{ url('profile/product') }}" class="nav-link">
                            <h4 class="produk" style="color: #1ACBAA;">Product</h4>
                        </a>
                        <a href="{{ url('profile/dashboard') }}" class="nav-link">
                            <h4 class="dashboard" style="color: #828599;">Dashboard</h4>
                        </a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="profile-date">
                        <div class="row mt-12" style="width: 53rem;">
                            <div class="col-sm-12">
                                <img src="{{ asset('images/Breadcrumb.png') }}" alt="" width="830px">
                                <div class="rectangle">
                                    <img src="{{ asset('images/Rectangle 41.png') }}" alt="" width="810px">
                                </div>
                                <div class="col-lg-10 profile-panel">
                                    <div class="col-lg">
                                        @if (Auth::user()->picture)
                                            <img src="{{ Auth::user()->picture }}" style="width:9%">
                                        @else
                                            <img src="{{ asset('images/profileImage.png') }}" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg icon-manage">
                                    <img src="{{ asset('images/profileIcon.png') }}" alt="">
                                </div>
                                <div class="profile-info">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5 class="font-weight-bold">{{ auth()->user()->username }}</h5>
                                            <p style="color: #718096; font-size: 14px;">{{ auth()->user()->email }}</p>
                                        </div>

                                        <div class="col-lg-3">
                                            @can('architect')
                                                <a id="Checkout" class="btn mb-4 btn-lg"
                                                    href="{{ url('/profile/insert_product') }}" style="font-size: 16px">
                                                    Tambah
                                                    Produk
                                                </a>
                                            @endcan
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tambah-product" style="margin-bottom: 100px;">
                            <h4 class="font-weight-bold mt-5" style="color: #002678; padding-left: 135px;">Produk</h4>
                            <div class="row mt-3" style="width: 68rem;">
                                @foreach ($designs as $design)
                                    <div class="col-sm-3 m-3">
                                        <div class="shadow bg-body rounded">
                                            @if (empty($design['image']))
                                                <img src="{{ asset('images/kategori.png') }}" class="card-img-top"
                                                    alt="..." width="auto" height="250">
                                            @else
                                                <img src="{{ asset('/designs/' . $design['owner'] . '/' . $design['name'] . '/' . $design['image'][0]) }}"
                                                    class="card-img-top" alt="..." width="auto" height="250">
                                            @endif
                                            <div class="card-body">
                                                <h9 class="card-title font-weight-bold">{{ $design['name'] }}</h9>
                                                <p class="tipe">Tipe {{ $design['type'] }}</p>
                                                <h4 class="price font-weight-bold">{{ $design['price'] }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
