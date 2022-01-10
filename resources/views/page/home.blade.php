@extends('layout.main')

@section('container')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel">
        </div>

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>

        <div class="container">
            <div class="carousel-inner mt-4">
                <div class="carousel-item active">
                    <img src="images/carousel1.png" class="d-block w-90" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel1.png" class="d-block w-90" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel1.png" class="d-block w-90" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel1.png" class="d-block w-90" alt="...">
                </div>
            </div>
        </div>

    </div>

    <div class="workingspace mb-3">

        <div class="container">
            <div class="row mt-4">
                <div class="col-sm">
                    <div class="row mt-6">
                        <div class="brand-img mr-3">
                            <img src="images/trophy.png" alt="">
                        </div>
                        <div class="branding mt-2">
                            <h5 class="title font-weight-bold">Kualitas Terbaik</h5>
                            <p>Dari Design Asiktektur Profesional</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row mt-6">
                        <div class="brand-img mr-3">
                            <img src="images/guarantee.png" alt="">
                        </div>
                        <div class="branding mt-2">
                            <h5 class="title font-weight-bold">Aman Digunakan</h5>
                            <p>Bangun Rumah Impianmu</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row mt-6">
                        <div class="brand-img mr-3">
                            <img src="images/shipping.png" alt="">
                        </div>
                        <div class="branding mt-2">
                            <h5 class="title font-weight-bold">Mudah dan Cepat</h5>
                            <p>Selesaikan Pembayaran & Download</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <br>

    <!-- jumbotron -->
    <div class="jumbotron text-center text-white">
        <h1 class="display-4">Discover The Best <br> Dreams House for You!</h1>
        <div class="mb-3 mb-m-1 order-md-1">
            <a id="Checkout" href="" class="btn mb-4 btn-lg pl-4 pr-4" style="margin-top: 25px;">Explore All Products</a>
        </div>
    </div>

    <div class="container">
        <div class="kategori">
            <img src="images/Rectangle.png" alt="">
            <h2 class="title font-weight-bold mt-2" style="color: #002678;">Cari Rumah Impian Anda</h2>
            <div class="row mt-4">
                <div class="col-sm-4 card w-50">
                    <div class="card-body text-center">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-expanded="false" style="color: #1ACBAA; border-radius:50px">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($categories as $category)
                                <a class="dropdown-item"
                                    href="{{ url("/category/{$category->slug}") }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 card w-50">
                    <div class="card-body text-center">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-expanded="false" style="color: #1ACBAA">
                            Tipe
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($types as $type)
                                <a class="dropdown-item"
                                    href="{{ url("/type/{$type->value}") }}">{{ $type->value }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 card w-50">
                    <div class="card-body text-center">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-expanded="false" style="color: #1ACBAA">
                            Harga
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Rekomendasi -->
    <div class="container">
        <div class="kategori mt-3">
            <h2 class="title font-weight-bold" style="color: #002678;">Rekomendasi</h2>
            <div class="row mt-3">
                @foreach($designs as $design)
                <?php $img = json_decode($design->image) ?>
                <div class="col-sm-3">
                    <div class="product">
                        <div class="product-header">
                            <div class="shadow bg-body rounded">
                                <img src="{{ asset('/designs/' . $design->owner->username . '/' . $design->name . '/' . $img[0]) }}" class="card-img-top" alt="...">
                                <ul class="icons">
                                    <a href="{{ url('type/' . $design->type->value . '/' . $design->id) }}">
                                        <span><i class="bx bx-info-circle"></i></span>
                                    </a>
                                    <form method="POST" action="{{ route('add.cart') }}">
                                        @csrf
                                        <input type="hidden" name="design_id"
                                        value="{{ $design['id'] }}" />
                                        <button type="submit" class="add-to-cart">
                                            <span><i class="bx bx-shopping-bag"></i></span>
                                        </button>
                                    </form>
                                </ul>
                                <div class="card-body">
                                    <h9 class="card-title font-weight-bold"> {{$design->name}} </h9>
                                    <p class="tipe">Tipe {{$design->type->value}}</p>
                                    <h4 class="price font-weight-bold"> {{$design->price}} </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="banner-disc">
                <img src="images/unsplash.png" alt="">
                <h2 class="heading">Get Discount up <br> to 50% off Today!</h2>
                <div class=" button-heading mb-3 mb-m-1 order-md-1">
                    <a href="" id="Checkout" class="btn mb-4 btn-lg">Explore All Products</a>
                </div>
            </div>
        </div>
    </div>

    <!-- sub kategori-->
    <div class="subkategori">
        <div class="container">
            <h2 class="font-weight-bold" style="color: #002678; padding-left: 59px;">Kategori</h2>
            <ul class="icons text-right text-white">
                <span><i class="fas fa-chevron-left"></i></span>
                <span><i class="fas fa-chevron-right"></i></span>
            </ul>
            <div class="row mt-5">
                <div class="col-sm-3">
                    <div class="kategori">
                        <div class="card-body">
                            @foreach ($categories as $category)
                                <a href="category/{{ $category->slug }}" class="nav-link"
                                    style="margin-top: -70px; padding:40px; color:#5E6E89">
                                    <h3>{{ $category->name }}</h3>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="shadow bg-body rounded">
                        <img src="images/subkat1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h9 class="card-title font-weight-bold">Kluster Rustic</h9>
                            <p class="card-text-paragraf">Tipe 36</p>
                            <h8 class="card-title font-weight-bold">Rp.750.000</h8>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="shadow bg-body rounded">
                        <img src="images/subkat2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h9 class="card-title font-weight-bold">Kluster Industrial</h9>
                            <p class="card-text-paragraf">Tipe 42</p>
                            <h8 class="card-title font-weight-bold">Rp.1.500.000</h8>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="shadow bg-body rounded">
                        <img src="images/subkat3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h9 class="card-title font-weight-bold">Kluster Modern</h9>
                            <p class="card-text-paragraf">Tipe 34</p>
                            <h8 class="card-title font-weight-bold">Rp.520.000</h8>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>

    <div class="Explore">
        <div class="container">
            <div class="row mt-3 no-gutters">
                <div class="col-md-2 bg-transparent mt-4" id="explore-home">
                    <h2 class="font-weight-bold mt-5">500+ Beautiful house inspiration</h2>
                    <p class="text-home mt-4">Our architect already made a lot of beautiful dream house</p>
                    <div class="mb-3 mb-m-1 order-md-1">
                        <a id="Checkout" href="" class="btn mb-4 btn-lg pl-4 pr-4">Explore More</a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="kategori">
                        <div class="row mt-3" style="width: 100rem;">
                            <div class="col-sm-3">
                                <div class="product">
                                    <div class="product-header">
                                        <div class="shadow bg-body rounded">
                                            <img src="images/kategori.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="product">
                                    <div class="product-header">
                                        <div class="shadow bg-body rounded">
                                            <img src="images/kategori.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="product">
                                    <div class="product-header">
                                        <div class="shadow bg-body rounded">
                                            <img src="images/kategori.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>


    <div class="testimonials" style="background: rgb(86, 178, 128,18%);">
        <div class="inner">
            <h1>Testimonials</h1>
            <p style="color: #5E6E89">Some quotes from our happy customers</p>

            <div class="row">
                <div class="col">
                    <div class="testimonial">
                        <img src="images/testi1.png" alt="">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            “I love it! No more air fresheners”
                        </p>
                        <div class="name">Luisa</div>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="images/testi2.png" alt="">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <p>
                            “Raccomended for everyone”
                        </p>
                        <div class="name">Edoardo</div>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="images/testi3.png" alt="">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <p>
                            “Looks very natural, the smell is awesome”
                        </p>
                        <div class="name">Mart</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
