@extends('layout.main')

@section('container')
    <section class="pt-5 pb-5">
        <div class="content" style="padding-left: 40px;">
            <div class="bg-transparent">
                <div class="content" style="padding-left: 20px;">
                    <div class="card-body">
                        <a href="" class="nav-link">
                            <h4 class="profile" style="color: #828599;">Profil</h4>
                        </a>
                        <a href="" class="nav-link">
                            <h4 class="daftar-transaksi" style="color: #1ACBAA;">Daftar Transaksi</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" style="padding-left: 420px; margin-top: -150px;">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h4 class="font-weight-bold" style="color: #002678;">Daftar Transaksi</h4>
                    <label>
                        <span class="pr-3" style="color: #828599;">28 Desember 2021 </span>
                        <span class="text-white text text-left pl-3 pr-3" style="background: #1ACBAA;">Selesai</span>
                    </label>
                    <table id="daftar-transaksi" class="table table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h5 class="font-weight-bold" style="color: #002678;">Rumah minimalis</h5>
                                            <label style="color: #828599;">Total Belanja</label>
                                            <div style="color: #1ACBAA;">Rp.1.200.000</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <label style="color: #828599;">File Gambar Kerja</lebel>
                                            <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                                                <a id="Checkout" href="" class="btn pl-4 pr-4"
                                                    style="margin-top: 20px;">Download</a>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h5 class="font-weight-bold" style="color: #002678;">Rumah minimalis</h5>
                                            <label style="color: #828599;">Total Belanja</label>
                                            <div style="color: #1ACBAA;">Rp.1.200.000</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <label style="color: #828599;">File Gambar Kerja</label>
                                        <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                                            <a id="Checkout" href="" class="btn pl-4 pr-4"
                                                style="margin-top: 20px;">Download</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h5 class="font-weight-bold" style="color: #002678;">Rumah minimalis</h5>
                                            <label style="color: #828599;">Total Belanja</label>
                                            <div style="color: #1ACBAA;">Rp.1.200.000</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <label style="color: #828599;">File Gambar Kerja</lebel>
                                            <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                                                <a id="Checkout" href="" class="btn pl-4 pr-4"
                                                    style="margin-top: 20px;">Download</a>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <label>
                        <span class="pr-3" style="color: #828599;">29 Desember 2021 </span>
                        <span class="text-white text text-left pl-3 pr-3" style="background: #1ACBAA;">Selesai</span>
                    </label>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h5 class="font-weight-bold" style="color: #002678;">Rumah minimalis</h5>
                                            <label style="color: #828599;">Total Belanja</label>
                                            <div style="color: #1ACBAA;">Rp.1.200.000</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <label style="color: #828599;">File Gambar Kerja</lebel>
                                            <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                                                <a id="Checkout" href="" class="btn pl-4 pr-4"
                                                    style="margin-top: 20px;">Download</a>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h5 class="font-weight-bold" style="color: #002678;">Rumah minimalis</h5>
                                            <label style="color: #828599;">Total Belanja</label>
                                            <div style="color: #1ACBAA;">Rp.1.200.000</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <label style="color: #828599;">File Gambar Kerja</label>
                                        <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                                            <a id="Checkout" href="" class="btn pl-4 pr-4"
                                                style="margin-top: 20px;">Download</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="{{ asset('images/kategori4.png') }}" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h5 class="font-weight-bold" style="color: #002678;">Rumah minimalis</h5>
                                            <label style="color: #828599;">Total Belanja</label>
                                            <div style="color: #1ACBAA;">Rp.1.200.000</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <label style="color: #828599;">File Gambar Kerja</lebel>
                                            <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                                                <a id="Checkout" href="" class="btn pl-4 pr-4"
                                                    style="margin-top: 20px;">Download</a>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
