@extends('layout.main')

@section('container')
    <div class="container">
        <div class="nav-detail" style="padding-left: 100px;">
            <nav aria-label="breadcrumb">
                <h5 class="font-weight-bold" style="color: #002678;">Rumah Minimalis Modern</h5>
                <ol class="breadcrumb" style="background: #fff;">
                    <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                    <li class="breadcrumb-item"><a href="#">Modern</a></li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-6">
                <!-- card left -->
                <div class="product-imgs container" style="padding: 50px; margin-top: -30px; padding-left: 90px;">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="{{ asset('images/detail/gmr1.png') }}" alt="...">
                            <img src="{{ asset('images/detail/gmr2.png') }}" alt="...">
                            <img src="{{ asset('images/detail/gmr3.png') }}" alt="...">
                            <img src="{{ asset('images/detail/gmr4.png') }}" alt="...">
                            <img src="{{ asset('images/detail/gmr5.png') }}" alt="...">
                            <img src="{{ asset('images/detail/gmr6.png') }}" alt="...">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="{{ asset('images/detail/gmr1.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="{{ asset('images/detail/gmr2.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="{{ asset('images/detail/gmr3.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="{{ asset('images/detail/gmr4.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="5">
                                <img src="{{ asset('images/detail/gmr5.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="6">
                                <img src="{{ asset('images/detail/gmr6.png') }}" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card right -->

            <div class="col-6">
                <div class="container">
                    <div class="product-content" style="padding-right: 90px;">
                        <h4 class="product-title">Rumah Minimalis Modern</h4>
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
                                <h2 class="font-weight-bold" style="color: #002678;">Rp. 1.299.000</h2>
                            </div>
                        </div>
                        <div class="purchase-info">
                            <button type="button " class="btn btn-outline-primary mb-4 btn-lg pl-4 pr-4">
                                Masukkan Keranjang <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn mb-4 btn-lg pl-4 pr-4">Belanja Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-detail">
            <div class="nav-link">
                <h4 class="nav-kategory text-center">
                    <a href="#" class="deskripsi" style="color:#1ACBAA; padding-right: 18px;">Deskripsi</a>
                    <a href="" class="spesifikasi" style="color: #616161; padding-right: 18px;">Spesifikasi</a>
                    <a href="" class="info" style="color: #616161;">Info Penting</a>
                </h4>
            </div>
            <div class="container">
                <p>Desain rumah minimalis pertama dengan tiga kamar yang berada pada sisi kiri. Konsep rumah ini menyamping.
                    Bagian ruang tamu dari desain rumah ini berada di bagian tengah dan bagian dapur berada di sisi kanan.
                    Konsep desain rumah minimalis ini sangat menarik dan patut untuk kamu coba.</p>
                <ul>
                    <li>Tipe 36</li>
                    <li>Ukuran 6x6</li>
                </ul>
                <a href="" class="text-info font-weight-bold"> Lihat Selengkapnya</a>
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
