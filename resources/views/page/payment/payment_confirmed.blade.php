@extends('layout.payment_main')

@section('container')
    <div class="d-flex justify-content-center">
        <div class="row g-3">
            <div class="col-md-6 mt-2">
                <div class="container" style="padding: 100px;">
                    <span>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb" style="background: #fff;">
                                <li class="breadcrumb-item">Cart</li>
                                <li class="breadcrumb-item active" aria-current="page">Details</li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                        style="color: #1ACBAA;">Payment</a></li>
                            </ol>
                        </nav>
                    </span>
                    <div class="card" style="height: 300px; border: none;">
                        <div class="accordion" id="accordionExample">
                            <img class="container" src="{{ asset('images/payment.gif') }}" alt="">
                            <h2 class="text-center">Payment Confirmed</h2>
                            <p class="text-center" style="color: #1ACBAA;">ORDER #2039</p>
                        </div>
                    </div>
                    <div class="" style="margin-top:30%;">
                        <div class="text-md-center">
                            <a href="{{ url('profile/transaction_list') }}" id="Checkout"
                                class="btn mb-4 btn-lg pl-5 pr-5 rounded-pill"
                                style=" background-color: rgba(26, 203, 170, 1); color: white;margin-top: 50px;">Go to
                                Transaction List </a>
                            <br>
                            <a href="{{ url('/') }}" style="color: #1ACBAA;">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail_payment" style="background: #F2F2F2; height: 100%;">
                    <div class="container" style="padding: 60px;">
                        @foreach ($items as $item)
                            <?php $img = json_decode($item->design->image); ?>
                            <div class="row">
                                <div class="col-md-3 mt-4">
                                    @if (empty($img))
                                        <img src="{{ asset('images/img1.png') }}" style="width: 100%;" width="auto"
                                            height="250">
                                    @else
                                        <img src="{{ asset('/designs/' . $item->design->owner->username . '/' . $item->design->name . '/' . $img[0]) }}"
                                            style="width: 100%;" width="auto" height="250">
                                    @endif
                                </div>
                                <div class="col-md-8 pl-5 mt-3 font-weight-bold">
                                    <div style="font-size: 18px;">{{ $item->design->name }}</div>
                                    <h4 style="color: #1ACBAA;">
                                        {{ 'Rp.' . number_format($item->design->price, 0, ',', '.') }}</h4>
                                </div>
                            </div>
                        @endforeach
                        <table class="table mt-3">
                            <tbody>
                                <tr>
                                    <td>Total</td>
                                    <td style="text-align: right; color: #1ACBAA;">
                                        <h4>{{ $sum }}</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
