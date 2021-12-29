@extends('layout.main')

@section('container')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #fff;">
                <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                <li class="breadcrumb-item" style="font-style: #1ACBAA;"><a href="#">Modern</a></li>
            </ol>
        </nav>
    </div>

    <div class="category">
        <div class="container">
            <div class="row workingspace">
                <div class="col-lg-6 mt-5">
                    <h2 class="font-weight-bold" style="color: #002678; padding-left: 32px;">Kategori</h2>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="urutan text-md-right">
                        <button type="button " class="btn"
                            style="background: #1ACBAA; color: #fff;">Terkait</button>
                        <button type="button" class="btn btn-light">Terbaru</button>
                        <button type="button" class="btn btn-light">Terlaris</button>
                        <button type="button" class="btn btn-light">Tipe</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 bg-transparent">
                    <div class="card-body">
                        @foreach ($categories as $category)
                            <a href="{{ $category->slug }}" class="nav-link">
                                <h4 class="{{ $category->slug }}"
                                    style="{{ Request::is('category/' . $category->slug) ? 'color:#1ACBBA;' : 'color:#828599' }}">
                                    {{ $category->name }}
                                </h4>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="kategori">
                        <div class="row mt-3" style="width: 68rem;">
                            <div class="col-sm-3">
                                <div class="product">
                                    <div class="product-header">
                                        <div class="shadow bg-body rounded">
                                            <img src="{{ asset('images/kategori.png') }}" class="card-img-top"
                                                alt="...">
                                            <ul class="icons">
                                                <span><i class="bx bx-heart"></i></span>
                                                <span><i class="bx bx-shopping-bag"></i></span>
                                            </ul>
                                            <div class="card-body">
                                                <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                                                <p class="tipe">Tipe 34</p>
                                                <h4 class="price font-weight-bold">Rp.7.000.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="product">
                                    <div class="product-header">
                                        <div class="shadow bg-body rounded">
                                            <img src="{{ asset('images/kategori.png') }}" class="card-img-top"
                                                alt="...">
                                            <ul class="icons">
                                                <span><i class="bx bx-heart"></i></span>
                                                <span><i class="bx bx-shopping-bag"></i></span>
                                            </ul>
                                            <div class="card-body">
                                                <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                                                <p class="tipe">Tipe 34</p>
                                                <h8 class="price font-weight-bold">Rp.7.000.000</h8>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="product">
                                    <div class="product-header">
                                        <div class="shadow bg-body rounded">
                                            <img src="{{ asset('images/kategori.png') }}" class="card-img-top"
                                                alt="...">
                                            <ul class="icons">
                                                <span><i class="bx bx-heart"></i></span>
                                                <span><i class="bx bx-shopping-bag"></i></span>
                                            </ul>
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

                    <div class="row mt-3 " style="width: 68rem;">
                        <div class="col-sm-3">
                            <div class="product">
                                <div class="product-header">
                                    <div class="shadow bg-body rounded">
                                        <img src="{{ asset('images/kategori.png') }}" class="card-img-top" alt="...">
                                        <ul class="icons">
                                            <span><i class="bx bx-heart"></i></span>
                                            <span><i class="bx bx-shopping-bag"></i></span>
                                        </ul>
                                        <div class="card-body">
                                            <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                                            <p class="tipe">Tipe 34</p>
                                            <h4 class="price font-weight-bold">Rp.7.000.000</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product">
                                <div class="product-header">
                                    <div class="shadow bg-body rounded">
                                        <img src="{{ asset('images/kategori.png') }}" class="card-img-top" alt="...">
                                        <ul class="icons">
                                            <span><i class="bx bx-heart"></i></span>
                                            <span><i class="bx bx-shopping-bag"></i></span>
                                        </ul>
                                        <div class="card-body">
                                            <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                                            <p class="tipe">Tipe 34</p>
                                            <h8 class="price font-weight-bold">Rp.7.000.000</h8>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product">
                                <div class="product-header">
                                    <div class="shadow bg-body rounded">
                                        <img src="{{ asset('images/kategori.png') }}" class="card-img-top" alt="...">
                                        <ul class="icons">
                                            <span><i class="bx bx-heart"></i></span>
                                            <span><i class="bx bx-shopping-bag"></i></span>
                                        </ul>
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

                    <div class="row mt-3" style="width: 68rem;">
                        <div class="col-sm-3">
                            <div class="product">
                                <div class="product-header">
                                    <div class="shadow bg-body rounded">
                                        <img src="{{ asset('images/kategori.png') }}" class="card-img-top" alt="...">
                                        <ul class="icons">
                                            <span><i class="bx bx-heart"></i></span>
                                            <span><i class="bx bx-shopping-bag"></i></span>
                                        </ul>
                                        <div class="card-body">
                                            <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                                            <p class="tipe">Tipe 34</p>
                                            <h4 class="price font-weight-bold">Rp.7.000.000</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product">
                                <div class="product-header">
                                    <div class="shadow bg-body rounded">
                                        <img src="{{ asset('images/kategori.png') }}" class="card-img-top" alt="...">
                                        <ul class="icons">
                                            <span><i class="bx bx-heart"></i></span>
                                            <span><i class="bx bx-shopping-bag"></i></span>
                                        </ul>
                                        <div class="card-body">
                                            <h9 class="card-title font-weight-bold">Rumah Minimalis Modern</h9>
                                            <p class="tipe">Tipe 34</p>
                                            <h8 class="price font-weight-bold">Rp.7.000.000</h8>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product">
                                <div class="product-header">
                                    <div class="shadow bg-body rounded">
                                        <img src="{{ asset('images/kategori.png') }}" class="card-img-top" alt="...">
                                        <ul class="icons">
                                            <span><i class="bx bx-heart"></i></span>
                                            <span><i class="bx bx-shopping-bag"></i></span>
                                        </ul>
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
                    <div class="row">
                        <div class="col-lg-1">
                            <ul class="pagination mt-5">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" style="background: #1ACBAA;">
                                        <i class="fa fa-angle-left" style="color: #fff;"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" style="color: #fff; background: #1ACBAA;" href="#">2 <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" style="background: #1ACBAA;">
                                        <i class="fa fa-angle-right" style="color: #fff;"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    @endsection
