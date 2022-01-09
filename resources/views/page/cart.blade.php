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
                        <a href="{{ url('/category/modern') }}" class="font-weight-light" style="color: #1ACBAA;">Back to
                            shopping</a>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th style="width:85%">Product</th>
                                <th style="width:10%">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)

                                <?php $img = json_decode($cart->design->image) ?>
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-md-3 text-left">
                                                <img src="{{ asset('/designs/'.$cart->design->owner->username.'/'.$cart->design->name.'/'.$img[0])}}" alt=""
                                                    class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                            </div>
                                            <div class="col-md-9 text-left mt-sm-2">
                                                <h6> {{ $cart->design->name }} </h6>

                                                <form method="POST" action="{{ route('delete.cart') }}">
                                                    @csrf
                                                    <input type="hidden" name="design_id" value="{{ $cart->design->id }}">
                                                    <button class="btn btn-danger" type="submit"> Remove </button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price"> Rp. {{ number_format($cart->design->price, 0, ',', '.') }}
                                    </td>
                                </tr>

                                <?php $sumTotal = $sumTotal + $cart->design->price; ?>

                            @endforeach

                        </tbody>
                    </table>
                    <div class="float-right text-right">
                        <h4> Total </h4>
                        <p> Rp. {{ number_format($sumTotal, 0, ',', '.') }} </p>
                    </div>
                </div>
            </div>
            <div class="mb-3 mb-m-1 order-md-1 text-md-right">
                <a href="{{ url('cart/payment_method') }}" id="Checkout" class="btn mb-4 btn-lg pl-5 pr-5">Checkout</a>
            </div>
        </div>
    </section>
@endsection
