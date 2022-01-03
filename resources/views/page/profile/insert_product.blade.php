@extends('layout.main')

@section('container')

    <div class="content mt-5" style="padding-left: 25px;">
        <div class="profil">
            <div class="row">
                <div class="bg-transparent">
                    <div class="card-body" style="width: 18rem;">
                        <a href="{{ url('profile') }}" class="nav-link">
                            <h4 class="profil" style="color: #828599;">Profil</h4>
                        </a>
                        <a href="{{ url('profile/product') }}" class="nav-link">
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
                                        <input type="image" src="{{ asset('/images/icon_add.png') }}"
                                            class="container mt-3">
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

                        <div class="form-group" style="color: #828599;">
                            <label for="exampleFormControlSelect1">File Blueprint (Gambar Kerja)</label>
                            <div class="custom-file">
                                <label class="custom-file-label" for="blueprintFile" id="blueprint">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('product.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="file" id="my_file" name="image[]" style="display: none;" multiple>
                        <input type="file" class="custom-file-input" id="blueprintFile" name="blueprint"
                            style="display: none">

                        <div class="card" style="padding: 20px;">
                            <h4 class="font-weight-bold" style="color: #002678;">Informasi Product</h4>
                            <div class="form-group mt-2" style="color: #828599;">
                                <label for="exampleFormControlInput1">Nama Produk</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="contoh : Rumah Minimalis" style="font-size: 14px; color: #828599;">
                            </div>
                            <div class="form-group" style="color: #828599;">
                                <label for="exampleFormControlSelect1">Kategori</label>
                                <select class="form-control" name="category_id" style="font-size: 14px; color: #828599;">
                                    <option>Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" style="color: #828599;">
                                <label for="exampleFormControlSelect1">Tipe</label>
                                <select class="form-control" name="type_id" style="font-size: 14px; color: #828599;">
                                    <option>Pilih Tipe</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" style="color: #828599;">
                                <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group" style="color: #828599;">
                                <label for="exampleFormControlInput1">Harga</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Masukkan Harga" name="price">
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

    @push('js')
        <script type="text/javascript">
            var sumFile = 0;

            $("input[type='image']").click(function() {
                $("input[id='my_file']").click();
            });

            $('#my_file').change(function() {

                for (var i = 0; i < this.files.length; i++) {
                    var fileName = this.files[i].name;
                    $('#list_file').append('<li>' + fileName + '</li>');
                    sumFile++;
                }

                $('#file-caption').html('<i> Maksimum jumlah gambar yang dapat diunggah : ' + (5 - sumFile) + '</i>');

                if (sumFile > 4) {
                    $('#card-upload-image').hide();
                }

            });

            $('#blueprintFile').change(function() {
                var filename = this.files[0].name

                $('#blueprint').text(filename)
            })
            $('#blueprintFile').val('')
        </script>
    @endpush
@endsection
