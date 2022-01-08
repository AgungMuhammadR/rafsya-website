@extends('layout.main')

@section('container')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #fff;">
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                <li class="breadcrumb-item" style="font-style: #1ACBAA;"><a href="#">{{ $current_state }}</a>
                </li>
            </ol>
        </nav>
    </div>

    <div class="category">
        <div class="container">
            <div class="row workingspace">
                <div class="col-lg-6 mt-5">
                    <h2 class="font-weight-bold" style="color: #002678; padding-left: 32px;">{{ $title }}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 bg-transparent">
                    <div class="card-body">
                        @foreach ($items as $item)
                            @if (Request::is('category*'))
                                <a href="{{ $item->slug }}" class="nav-link">
                                    <h4 class="{{ $item->slug }}"
                                        style="{{ Request::is('category/' . $item->slug) ? 'color:#1ACBBA;' : 'color:#828599' }}">
                                        {{ $item->name }}
                                    </h4>
                                </a>
                            @endif
                            @if (Request::is('type*'))
                                <a href="{{ $item->value }}" class="nav-link">
                                    <h4 class="{{ $item->value }}"
                                        style="{{ Request::is('type/' . $item->value) ? 'color:#1ACBBA;' : 'color:#828599' }}">
                                        {{ $item->value }}
                                    </h4>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="kategori">
                        <div class="row mt-3" style="width: 68rem;">
                            @foreach ($designs as $design)
                                <div class="col-sm-3 m-3">
                                    <div class="product">
                                        <div class="product-header">
                                            <div class="shadow bg-body rounded">
                                                <img src="{{ asset('images/kategori.png') }}" class="card-img-top"
                                                    alt="...">
                                                <ul class="icons">
                                                    @if (Request::is('category*'))
                                                        <a
                                                            href="{{ url('category/' . strtolower($current_state) . '/' . $design['id']) }}">
                                                            <span><i class="bx bx-info-circle"></i></span>
                                                        </a>
                                                    @endif
                                                    @if (Request::is('type*'))
                                                        <a
                                                            href="{{ url('type/' . $current_state . '/' . $design['id']) }}">
                                                            <span><i class="bx bx-info-circle"></i></span>
                                                        </a>
                                                    @endif

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
                                                    <h9 class="card-title font-weight-bold">{{ $design['name'] }}</h9>
                                                    <p class="tipe">Tipe {{ $design['type'] }}</p>
                                                    <h4 class="price font-weight-bold">{{ $design['price'] }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
    </div>

@endsection
