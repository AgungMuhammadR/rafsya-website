@extends('layout.main')

@section('container')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #fff;">
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                <li class="breadcrumb-item"><a href="#" style="color: #1ACBAA">Buka Toko</a></li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5">
        <h4 class="text-center font-weight-bold"> Halo, ayo isi data kamu </h4>
        <br>

        <form method="POST" action="{{ route('open.store.put') }}" class="mt-3 mb-5" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            {{-- Progress bar --}}
            <div class="progressbar text-white">
                <div class="progress-step"></div>
                <div class="progress-step"></div>
            </div>
            <div class="store-date" style="padding-left: 358px">
            <div class="form-group" style="width: 400px">
                <label> Nama Toko </label>
                <input type="text" class="form-control"name="store_name" placeholder="Nama Toko">
            </div>

            <div class="form-group mt-4" style="width: 400px">
                <label> Upload License </label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="license" id="license" style="color: #1ACBAA;">
                    <label class="custom-file-label" for="customFile" style="color: #">Choose file</label>
                </div>
            </div>
        </div>

            <div class="mb-3 mb-m-1 order-md-1 text-md-center">
                <a href="catalog.html">
                <a id="Checkout" href="catalog.html" class="btn mt-5 mb-4 btn-lg pl-5 pr-5">Buat Toko</a>
            </div>

        </form>


    </div>
@endsection
