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
            <h4 class="font-weight-bold mb-2" style="color: #002678;">Upload Product </h4>
            <div class="form-group" style="color: #828599;">
                <label for="exampleFormControlInput1">Foto Produk</label>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card" style="border: none; width: 50%;" id="card-upload-image">
                                <input type="image" src="{{ asset('/images/icon_add.png') }}" class="container mt-3">
                                <input type="file" id="my_file" name="fileimage[]" style="display: none;">
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="ml-4">
                                <ol>
                                   <div id="list_file"></div> 
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div id="file-caption">
                        <i> Maksimum jumlah gambar yang dapat diunggah : 5 </i>
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
                        <option>Pilih Kategori </option>
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
                <div class="col-12 mt-4 mb-5 text-md-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div> 
</div>
</div>


<script type="text/javascript">

    var sumFile = 0;

    $("input[type='image']").click(function() {
        $("input[id='my_file']").click();
    });

    $('#my_file').change(function() {

      var i = $(this).prev('label').clone();
      var file = $('#my_file')[0].files[0].name;
      $('#list_file').append('<li>' + file + '</li>');

      sumFile++;
      $('#file-caption').html('<i> Maksimum jumlah gambar yang dapat diunggah : ' + (5-sumFile) + '</i>');
      
      if (sumFile > 4) {
        $('#card-upload-image').hide();
      }

    });

    

</script>

@endsection

