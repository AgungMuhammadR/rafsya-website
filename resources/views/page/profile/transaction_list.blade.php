@extends('layout.main')

@section('container')
    <section class="pt-5 pb-5">
        <div class="content" style="padding-left: 40px;">
            <div class="bg-transparent">
                <div class="content" style="padding-left: 20px;">
                    <div class="card-body">
                        <a href="" class="nav-link">
                            <h4 class="profile" style="color: #828599;">Profile</h4>
                        </a>
                        <a href="" class="nav-link">
                            <h4 class="daftar-transaksi" style="color: #1ACBAA;">Daftar Transaksi</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" style="padding-left: 420px; margin-top: -150px;">
            <h4 class="font-weight-bold" style="color: #002678;">Daftar Transaksi</h4>

            <div class="row w-100">
                @foreach ($transactions as $transaction)
                    <div class="col-lg-12 col-md-12 col-12">
                        <label>
                            <span class="pr-3" style="color: #828599;">{{ $transaction['date'] }}</span>
                            <span class="text-white text text-left pl-3 pr-3" style="background: #1ACBAA;">Selesai</span>
                        </label>

                        @foreach ($transaction['detail'] as $item)
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
                                                    <h5 class="font-weight-bold" style="color: #002678;">
                                                        {{ $item->product_name }}
                                                    </h5>
                                                    <label style="color: #828599;">Total Belanja</label>
                                                    <div style="color: #1ACBAA;">
                                                        {{ 'Rp.' . number_format($item->product_price, 0, ',', '.') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="actions" data-th="">
                                            <div class="text-right">
                                                <label style="color: #828599;">File Gambar Kerja</lebel>
                                                    <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                                                        <form action="{{ route('download-blueprint') }}" method="GET">
                                                            <input type="hidden" name="seller_id"
                                                                value="{{ $item->seller_id }}">
                                                            <input type="hidden" name="design_name"
                                                                value="{{ $item->product_name }}">
                                                            <input type="hidden" name="blueprint"
                                                                value="{{ $item->blueprint }}">
                                                            <button type="submit" id="Checkout" class="btn pl-4 pr-4"
                                                                style="margin-top: 20px;">Download</button>
                                                        </form>
                                                    </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
