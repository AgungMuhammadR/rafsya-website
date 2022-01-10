@extends('layout.main')

@section('container')
    <div class="container">
        <div class="nav-detail mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background: #fff;">
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    <li class="breadcrumb-item"><a href="#" style="color: #1ACBAA">{{ $current_state }}</a></li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-6">
                <!-- card left -->
                <div class="product-imgs container" style="padding: 50px; margin-top: -30px; padding-left: 5px;">
                    <div class="img-display">
                        <div class="img-showcase">
                            @if (empty(json_decode($design->image)))
                                <img src="{{ asset('images/detail/gmr1.png') }}" alt="..." id="img-detail">
                                <img src="{{ asset('images/detail/gmr2.png') }}" alt="..." id="img-detail">
                                <img src="{{ asset('images/detail/gmr3.png') }}" alt="..." id="img-detail">
                                <img src="{{ asset('images/detail/gmr4.png') }}" alt="..." id="img-detail">
                                <img src="{{ asset('images/detail/gmr5.png') }}" alt="..." id="img-detail">
                                <img src="{{ asset('images/detail/gmr6.png') }}" alt="..." id="img-detail">
                            @else
                                @foreach (json_decode($design->image) as $img)
                                    <img src="{{ asset('/designs/' . $design->owner->username . '/' . $design->name . '/' . $img) }}"
                                        alt="..." id="img-detail">
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="img-select">
                        @if (empty(json_decode($design->image)))
                            <div class="img-item">
                                <a href="#" data-id="1">
                                    <img src="{{ asset('images/detail/gmr1.png') }}" alt="..." style="width: 76px">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="2">
                                    <img src="{{ asset('images/detail/gmr2.png') }}" alt="..." style="width: 76px">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="3">
                                    <img src="{{ asset('images/detail/gmr3.png') }}" alt="..." style="width: 76px">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="4">
                                    <img src="{{ asset('images/detail/gmr4.png') }}" alt="..." style="width: 76px">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="5">
                                    <img src="{{ asset('images/detail/gmr5.png') }}" alt="..." style="width: 76px">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="6">
                                    <img src="{{ asset('images/detail/gmr6.png') }}" alt="..." style="width: 76px"></a>
                            </div>
                        @else
                            @foreach (json_decode($design->image) as $key => $img)
                                <div class="img-item">
                                    <a href="#" data-id="{{ $key + 1 }}">
                                        <img src="{{ asset('/designs/' . $design->owner->username . '/' . $design->name . '/' . $img) }}"
                                            alt="..." style="width: 76px">
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="card" style="width: 490px">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ url('images/testi1.png') }}" alt="" width="100px">
                        </div>
                        <div class="purchase-info col-6">
                            <form action="{{ route('consultation') }}" method="GET">
                                <input type="hidden" name="data[]" value="{{ Crypt::encrypt($design->owner->email) }}">
                                <input type="hidden" name="data[]"
                                    value="{{ Crypt::encrypt($design->owner->phone_number) }}">
                                <button type="submit" class="btn mb-4 btn-lg pl-4 pr-4">Consultation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card right -->

            <div class="col-6">
                <div class="container">
                    <div class="product-content" style="padding-right: 5px;">
                        <h4 class="product-title">{{ $design->name }}</h4>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <span>4.8 (75 Review) | Terjual (73)</span>
                        </div>

                        <div class="product-price">
                            <p class="last-price">Tipe</p>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-primary text-white"
                                    style="background: #002678;">24</button>
                                <button type="button" class="btn btn-outline-primary">36</button>
                                <button type="button" class="btn btn-outline-primary">45</button>
                                <button type="button" class="btn btn-outline-primary">54</button>
                                <button type="button" class="btn btn-outline-primary">60</button>
                                <button type="button" class="btn btn-outline-primary">70</button>
                                <button type="button" class="btn btn-outline-primary">120</button>
                            </div>
                            <p class="new-price">Paket</p>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Basic
                                            </label>
                                        </div>
                                        <p>1 kamar mandi</p>
                                        <p>2 kamar tidur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Comfort
                                            </label>
                                        </div>
                                        <p>2 kamar mandi</p>
                                        <p>3 kamar tidur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-sm-4">
                            <div class="col-6 font-weight-bold" style="font-size: 18px;">
                                <div style="color: #828599;">Harga</div>
                            </div>
                            <div class="col-6 text-right">
                                <h2 class="font-weight-bold" style="color: #002678;">
                                    {{ 'Rp.' . number_format($design->price, 0, ',', '.') }}</h2>
                            </div>
                        </div>
                        <div class="purchase-info">
                            <form method="POST" action="{{ route('add.cart') }}" class="d-inline-block">
                                @csrf
                                <input type="hidden" name="design_id" value="{{ $design['id'] }}" />
                                <button type="submit " class="btn btn-outline-primary mb-4 btn-lg pl-4 pr-4">
                                    Masukkan Keranjang <i class="fas fa-shopping-cart"></i>
                                </button>
                            </form>
                            <form method="POST" action="{{ route('shop.now') }}" class="d-inline-block">
                                @csrf
                                <input type="hidden" name="design_id" value="{{ $design['id'] }}" />
                                <button type="submit" class="btn mb-4 btn-lg pl-4 pr-4">Belanja Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-detail">
            <div class="nav-link">
                <h4 class="nav-kategory text-center deskripsi" style="color:#3A3A3A; padding-right: 18px;">
                    Deskripsi
                </h4>
            </div>
            <div class="container">
                <p>{{ $design->description }}</p>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            const imgs = document.querySelectorAll('.img-select a');
            const imgBtns = [...imgs];
            let imgId = 1;

            imgBtns.forEach((imgItem) => {
                imgItem.addEventListener('click', (event) => {
                    event.preventDefault();
                    imgId = imgItem.dataset.id;
                    slideImage();
                });
            });

            function slideImage() {
                const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

                document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
            }

            window.addEventListener('resize', slideImage);
        </script>
    @endpush
@endsection
