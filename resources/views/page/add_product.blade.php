@extends('layout.main')

@section('container')
<div class="content mt-5" style="padding-left: 65px;">
<div class="profil">
<div class="row">
    <div class="bg-transparent">
      <div class="card-body">
        <a href="" class="nav-link">
          <h4 class="profil" style="color: #1ACBAA;">Profil</h4>
        </a>
        <a href="" class="nav-link">
          <h4 class="produkr" style="color: #828599;">Product</h4>
        </a>
        <a href="" class="nav-link">
          <h4 class="dashboard" style="color: #828599;">Dashboard</h4>
        </a>
      </div>
    </div>

    <div class="col-md-10">
          <div class="profile-date">
              <div class="row mt-12" style="width: 70rem;">
                <div class="col-sm-12">
                    <img src="images/Breadcrumb.png" alt="">
                    <div class="rectangle">
                        <img src="images/Rectangle 41.png" alt="">
                    </div>
                    <div class="col-lg-10 profile-panel">
                      <div class="col-lg">
                        <img src="images/profileImage.png" alt="">
                      </div>
                    </div>
                    <div class="col-lg icon-manage">
                      <img src="images/profileIcon.png" alt="">
                    </div>
                    <div class="profile-info">
                        <h5 class="font-weight-bold">Angela Trinata</h5>
                        <p style="color: #718096; font-size: 14px;">angela@example.com</p>
                    </div>
                    <div class="mb-3 mb-m-1 order-md-1 text-md-right" style="margin-top: -56px; padding-right: 55px;">
                        <a href="">
                        <a id="Checkout" href="" class="btn mb-4 btn-lg pl-4 pr-4">Tambah Produk</a>
                    </div>
                    </div>
                </div>
          </div>

            <div class="tambah-product" style="margin-bottom: 100px;">
                <h4 class="font-weight-bold mt-4" style="color: #002678; padding-left: 135px;">Produk</h4>
                <div class="row mt-3" style="width: 68rem;">
                  <div class="col-sm-3">
                        <div class="shadow bg-body rounded">
                          <img src="images/kategori.png" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                              <p class="tipe">Tipe 34</p>
                              <h4 class="price font-weight-bold">Rp.7.000.000</h4>
                          </div>
                        </div>
                  </div>
          
                <div class="col-sm-3">
                      <div class="shadow bg-body rounded">
                        <img src="images/kategori.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                            <p class="tipe">Tipe 34</p>
                            <h8 class="price font-weight-bold">Rp.7.000.000</h8>
                        </div>
                      </div>
                </div>
          
                  <div class="col-sm-3">
                        <div class="shadow bg-body rounded">
                          <img src="images/kategori.png" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                              <p class="tipe">Tipe 34</p>
                              <h8 class="price font-weight-bold">Rp.7.000.000</h8>
                          </div>
                        </div>
                  </div>
              </div>
            </div>
      </div>
  </div>
</div>
</div>
@endsection