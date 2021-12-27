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
                            <li class="breadcrumb-item active" aria-current="page"><a href="#" style="color: #1ACBAA;">Payment</a></li>
                        </ol>
                    </nav>
                </span>
                <span>
                    <div class="row mt-2">
                        <div class="col-md-6 mb-3 font-weight-bold" style="font-size: 20px;">Contact</div>
                        <div class="col-md-6 mb-3 text-md-right">
                            <span>Do you have an account?</span>
                            <a href="#" style="color: #1ACBAA;">Login</a>
        			    </div>
        		    </div>
                </span>
                <div class="card" style="height: 300px; border: none;">
                    <div class="accordion" id="accordionExample">
                        <img class="container" src="images/payment.gif" alt="">
                        <h2 class="text-center">Payment Confirmed</h2>
                        <p class="text-center" style="color: #1ACBAA;">ORDER #2039</p>
                    </div>
                </div>
                <div class="" style="margin-top:30%;">
                        <div class="text-md-center">
                            <a id="Checkout" href="" class="btn mb-4 btn-lg pl-5 pr-5 rounded-pill" style=" background-color: rgba(26, 203, 170, 1); color: white;margin-top: 50px;">Checkout</a>
                            <br>
                            <a href="#" style="color: #1ACBAA;">Download</a>
                        </div>
                </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="detail_payment" style="background: #F2F2F2; height: 100%;">
                <div class="container" style="padding: 60px;">
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <img src="images/img1.png" style="width: 100%;">
                        </div>
                        <div class="col-md-8 pl-5 mt-3 font-weight-bold">
                            <div style="font-size: 18px;">Rumah Minimalis Modern</div>
                            <h4 style="color: #1ACBAA;">Rp1.299.000</h4>
                        </div>
                    </div>
                    <table class="table mt-3">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td style="text-align: right; color: #002678;">
                                    Rp1.299.000
                                </td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td style="text-align: right; color: #1ACBAA;">
                                    <h4>Rp1.299.000</h4>
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