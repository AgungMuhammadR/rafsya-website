@extends('layout.main')

@section('container')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #fff;">
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                <li class="breadcrumb-item" style="font-style: #1ACBAA;"><a href="#">Buka Toko</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <h4> Halo, ayo isi data kamu </h4>
        <br>

        <form method="POST" action="{{ route('open.store.post') }}" class="mt-3 mb-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="color: #828599;">
                <label> Nama Toko </label>
                <input type="text" class="form-control" name="store_name">
            </div>

            <div class="form-group" style="color: #828599;">
                <label> Upload License </label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="license" id="license" style="color: #1ACBAA;">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>

            <div class="form-group">
                <p align="center"> <input type="submit" name="submit" value="Buat Toko" class="btn btn-primary"> </p>
            </div>

        </form>


    </div>
@endsection
