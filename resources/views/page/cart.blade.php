@extends('layout.main')

@section('container')
<section class="pt-5 pb-5">
    <div class="container">
      <div class="row w-100">
          <div class="col-lg-12 col-md-12 col-12">
              <h3 class="display-6 mb-2 text-center">Your Cart Item</h3>
              <p class="mb-5 text-center">
                  <a href="" class="font-weight-light" style="color: #1ACBAA;">Back to shopping</a>
              <table id="shoppingCart" class="table table-condensed table-responsive">
                  <thead>
                      <tr>
                          <th style="width:60%">Product</th>
                          <th style="width:12%">Price</th>
                          <th style="width:10%">Quantity</th>
                          <th style="width:16%;text-align: right;">Total</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td data-th="Product">
                              <div class="row">
                                  <div class="col-md-3 text-left">
                                      <img src="images/kategori4.png" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                  </div>
                                  <div class="col-md-9 text-left mt-sm-2">
                                      <h6>Rumah minimalis modern</h6>
                                      <a href="" class="font-weight-light" style="color: #1ACBAA;">Remove</a>
                                  </div>
                              </div>
                          </td>
                          <td data-th="Price">$49.00</td>
                          <td data-th="Quantity">
                              <input type="number" class="form-control form-control-lg text-center" value="1">
                          </td>
                          <td class="actions" data-th="">
                              <div class="text-right">
                                  <p>Rp. 1.299000</p>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td data-th="Product">
                              <div class="row">
                                  <div class="col-md-3 text-left">
                                      <img src="images/kategori4.png" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                  </div>
                                  <div class="col-md-9 text-left mt-sm-2">
                                      <h6>Rumah minimalis modern</h6>
                                      <a href="" class="font-weight-light" style="color: #1ACBAA;">Remove</a>
                                  </div>
                              </div>
                          </td>
                          <td data-th="Price">$49.00</td>
                          <td data-th="Quantity">
                              <input type="number" class="form-control form-control-lg text-center" value="1">
                          </td>
                          <td class="actions" data-th="">
                              <div class="text-right">
                                  <p>Rp. 1.299.000</p>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td data-th="Product">
                              <div class="row">
                                  <div class="col-md-3 text-left">
                                      <img src="images/kategori4.png" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                  </div>
                                  <div class="col-md-9 text-left mt-sm-2">
                                      <h6>Rumah minimalis modern</h6>
                                      <a href="" class="font-weight-light" style="color: #1ACBAA;">Remove</a>
                                  </div>
                              </div>
                          </td>
                          <td data-th="Price">$49.00</td>
                          <td data-th="Quantity">
                              <input type="number" class="form-control form-control-lg text-center" value="1">
                          </td>
                          <td class="actions" data-th="">
                              <div class="text-right">
                                  <p>Rp. 1.299.000</p>
                              </div>
                          </td>
                      </tr>
                  </tbody>
              </table>
              <div class="float-right text-right">
                  <h4>Subtotal:</h4>
                  <p>Rp. 1.299.000</p>
              </div>
          </div>
      </div>
          <div class="mb-3 mb-m-1 order-md-1 text-md-right">
              <a href="catalog.html">
              <a id="Checkout" href="{{ url ('payment_method') }}" class="btn mb-4 btn-lg pl-5 pr-5">Checkout</a>
          </div>
      </div>
  </div>
</section>
@endsection