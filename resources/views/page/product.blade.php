@extends('layout.main')

@section('container')

<div class="content mt-5" style="padding-left: 25px;">
<div class="profil">
<div class="row">
    <div class="bg-transparent">
      <div class="card-body" style="width: 18rem;">
        <a href="{{ url ('profile') }}" class="nav-link">
          <h4 class="profil" style="color: #828599;">Profil</h4>
        </a>
        <a href="{{ url ('profile/product') }}" class="nav-link">
          <h4 class="produk" style="color: #1ACBAA;">Product</h4>
        </a>
        <a href="" class="nav-link">
          <h4 class="pesanan" style="color: #828599;">Pesanan</h4>
        </a>
      </div>
    </div>

    <div class="upload" style="width: 55rem;">
        <div class="card" style="margin-bottom: 20px; padding: 20px;">
            <h4 class="font-weight-bold mb-3" style="color: #002678;">Upload Product</h4>
            <div class="form-group" style="color: #828599;">
                <label for="exampleFormControlInput1">Foto Produk</label>
                <div class="row" style="padding-right: 340px;">
                    <div class="col-sm-2">
                        <div class="card mb-2" style="width: 80px; height: 80px;">
                            <img src="" class="container mt-4" style="padding-left: 30px" alt=".." width="30px">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-2" style="width: 80px; height: 80px;">
                            <img src="" class="container mt-4" style="padding-left: 30px" alt=".." width="30px">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-2" style="width: 80px; height: 80px;">
                            <img src="" class="container mt-4" style="padding-left: 30px" alt=".." width="30px">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-2" style="width: 80px; height: 80px;">
                            <img src="" class="container mt-4" style="padding-left: 30px" alt=".." width="30px">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-2" style="width: 80px; height: 80px;">
                            <img src="" class="container mt-4" style="padding-left: 30px" alt=".." width="30px">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-2" style="width: 80px; height: 80px;">
                            <a class="container mt-4" style="color: #1ACBAA; padding-left:30px" alt=".." width="30px"> <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group" style="color: #828599;">
                <label for="exampleFormControlInput1">File</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
        <form>
            <div class="card" style="padding: 20px;">
                <h4 class="font-weight-bold" style="color: #002678;">Informasi Product</h4>
                <div class="form-group mt-2" style="color: #828599;">
                    <label for="exampleFormControlInput1">Nama Produk</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="contoh : Rumah Minimalis" style="font-size: 14px; color: #828599;">
                </div>
                <div class="form-group" style="color: #828599;">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control" id="exampleFormControlSelect1" style="font-size: 14px; color: #828599;">
                        <option>Pilih Kategori</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                 </div>
                 <div class="form-group" style="color: #828599;">
                    <label for="exampleFormControlSelect1">Tipe</label>
                    <select class="form-control" id="exampleFormControlSelect1" style="font-size: 14px; color: #828599;">
                        <option>Pilih Tipe</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group" style="color: #828599;">
                    <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group" style="color: #828599;">
                    <label for="exampleFormControlInput1">Harga</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga">
                </div>
            </div>
        </form>
        <div class="mb-3 mt-5 mb-m-1 order-md-1 text-md-right" style="padding-right: 55px;">
            <a href="">
            <a id="Checkout" href="" class="btn mb-4 btn-lg pl-4 pr-4">Simpan</a>
        </div>
    </div>
</div> 
</div>
</div>
@endsection