<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img width="100 " src="{{ asset('images/logo.png') }}" alt="#" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse my-n2" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                            <a class="dropdown-item"
                                href="{{ url("/category/{$category->slug}") }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Tipe
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($types as $type)
                            <a class="dropdown-item"
                                href="{{ url("/type/{$type->value}") }}">{{ $type->value }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                </li>
            </ul>

            <div class="col-sm-6">
                <span class="search">
                    <div class="input-group w-100">
                        <input type="text" class="form-control" placeholder="Cari Produk" name="keyword">
                        <div class="input-group-append">
                            <button class="btn" style="background-color: #1ACBAA;" id="btnSearch"
                                data-toggle="modal" data-target="#exampleModalLong">
                                <i class="fa fa-search" style="color: #fff;"></i>
                            </button>
                        </div>
                    </div>
                </span>
            </div>

            <div class="icon mt-2">
                <h5>
                    @auth
                        @can('customer')
                            <a href="{{ url('cart') }}" style="text-decoration: none"><img
                                    src="{{ asset('images/cart.png') }}" class="icon-cart mx-2" alt="">
                                <div class="badge text-white ml-n4">{{ $total_item }}</div>
                            </a>
                        @endcan

                        <div class="d-inline-block">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        @if (Auth::user()->picture)
                                            <img src="{{ Auth::user()->picture }}" style="border-radius: 50%;"
                                                class="icon-profil" width="40" height="40">
                                        @else
                                            <img src="{{ asset('images/profil.png') }}" width="40" height="40"
                                                class="icon-profil">
                                        @endif

                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>

                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="d-inline-block">
                            <ul class="navbar-nav">
                                <a class="nav-link" href="{{ url('/login') }}">
                                    <img src="{{ asset('images/logo_login.png') }}" class="icon-profil">
                                </a>
                            </ul>
                        </div>
                    @endauth
                </h5>
            </div>

        </div>
    </div>
</nav>


@include('layout.result_search')

<script type="text/javascript">
    $('.pencarian').hide();
    var tagHtml = '';

    function addId(id) {

        tagHtml =
            '<div class="col-sm-3"> <div class="product"> <div class="product-header"> <div class="bg-body rounded"> <img id="gambar' +
            id +
            '" src="" class="card-img-top" alt="..." width="auto" height="250"> <ul class="icons"> <a id="link-info' +
            id +
            '" href=""> <span><i class="bx bx-info-circle"></i></span> </a> <form method="POST" action="{{ route('add.cart') }}"> @csrf <input type="hidden" id="input' +
            id +
            '" name="design_id" value="" /> <button type="submit" class="add-to-cart"> <span><i class="bx bx-shopping-bag"></i></span> </button> </form> </ul> <div class="card-body"> <h9 class="card-title font-weight-bold"> <div id="nama-produk' +
            id + '"></div> </h9> <p class="tipe"><div id="tipe-produk' + id +
            '"></div></p><h8 class="price font-weight-bold"><div id="harga-produk' + id +
            '"></div></h8> </div> </div> </div> </div></div>';
    }

    function formatNomor(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    $('#btnSearch').on('click', function() {

        $('#konten').html('');
        $('.pencarian').hide();
        $('#no-result').show();

        var key = $('input[name=keyword]').val();
        var productUrl = '';

        $.ajax({
            url: '{{ url('search-product') }}',
            type: 'get',
            data: {
                keyword: key
            },
            success: function(data) {

                $('.wrapper').hide();
                $('.pencarian').show();

                for (var i = 0; i < data.length; i++) {
                    $('#no-result').hide();
                    addId(i);
                    $('#konten').append(tagHtml);
                    $('#nama-produk' + i).append(data[i].name);
                    $('#tipe-produk' + i).append('Tipe ' + data[i].type.value);
                    $('#harga-produk' + i).append('Rp. ' + formatNomor(data[i].price));


                    nameImage = JSON.parse(data[i].image);
                    productUrl = 'http://localhost:8000/type/' + data[i].type.value + '/' + data[i]
                        .id;
                    if (nameImage.length === 0) {
                        imageUrl = "{{ asset('images/kategori.png') }}"
                    } else {
                        imageUrl = 'http://localhost:8000/designs/' + data[i].owner.username + '/' +
                            data[i].name + '/' + nameImage[0];
                    }
                    $('#link-info' + i).prop('href', productUrl);
                    $('#gambar' + i).prop('src', imageUrl);
                    $('#input' + i).prop('value', data[i].id);

                }

            }
        });

    })

    $('#closeSearch').on('click', function() {

        $('#konten').html('');
        $('.pencarian').hide();
        $('.wrapper').show();
        $('#no-result').hide();


    });
</script>
