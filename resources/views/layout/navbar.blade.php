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
                <form action="#" class="search">
                    <div class="input-group w-100">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn" type="submit" style="background-color: #1ACBAA;">
                                <i class="fa fa-search" style="color: #fff;"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="icon mt-2">
                <h5>
                    @auth
                        @can('customer')
                            <a href="{{ url('cart') }}" style="text-decoration: none"><img
                                    src="{{ asset('images/cart.png') }}" class="icon-cart mx-3" alt="">
                                <span class="badge badge-dark ml-n3 mt-n5">{{ $total_item }}</span>
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
