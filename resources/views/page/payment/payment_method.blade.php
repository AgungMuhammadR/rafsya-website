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
                        <div class="col-md-6 mb-3 font-weight-bold" style="font-size: 20px;">Metode Pembayaran</div>
                        <div class="col-md-6 mb-3 text-md-right">
                            <a href="#" style="color: #1ACBAA;">Lihat Semua</a>
        			    </div>
        		    </div>
                </span>
                <div class="card" style="height: 300px; border: none;">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header p-0" id="headingTwo">
                                <h2 class="mb-0"> 
                                    <button class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex align-items-center"> 
                                            <img src="images/mandiri.jpeg" width="20%">
                                            <span class="pl-4">Mandiri Virtual Account</span> 
                                        </div>
                                    </button> 
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body"> <input type="text" class="form-control" placeholder="Paypal email"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="" style="color: #1ACBAA;">Back to Cart</a>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a id="Checkout" href="catalog.html" class="btn mb-4 btn-lg pl-5 pr-5 rounded-pill" style=" background-color: rgba(26, 203, 170, 1); color: white;">Checkout</a>
                        </div>
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