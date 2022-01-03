@extends('layout.main')

<?php 
    
    $sumTotal = 0;

?>

@section('container')
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-6 mb-2 text-center">Your Cart Item</h3>
                    <p class="mb-5 text-center">
                        <a href="{{url('category/modern')}}" class="font-weight-light" style="color: #1ACBAA;">Back to shopping</a>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th style="width:65%">Product</th>
                                <th style="width:20%">Price</th>
                                <th style="width:10%;text-align: right;">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($carts as $cart)
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="images/kategori4.png" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h6> {{$cart->design->name}} </h6>

                                            <form method="POST" action="{{ route('delete.cart') }}">
                                                @csrf
                                                <input type="hidden" name="design_id" value="{{$cart->design->id}}">
                                                <button class="btn btn-danger" type="submit"> Remove </button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price"> Rp. {{number_format($cart->design->price, 0, ',', '.')}} </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <p> Rp. {{number_format($cart->design->price, 0, ',', '.')}} </p>
                                    </div>
                                </td>
                            </tr>

                            <?php $sumTotal = $sumTotal + $cart->design->price ?>

                            @endforeach

                        </tbody>
                    </table>
                    <div class="float-right text-right">
                        <h4> Total </h4>
                        <p> Rp. {{number_format($sumTotal, 0, ',', '.')}} </p>
                    </div>
                </div>
            </div>
            <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                <a href="catalog.html">
                    <a id="Checkout" href="{{ url('payment_method') }}" class="btn mb-4 btn-lg pl-5 pr-5">Checkout</a>
            </div>
        </div>
        </div>
    </section>
@endsection
