<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">

        <a class="navbar-brand" href="/">
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
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Type
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq">FAQ</a>
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
                    <a href="{{ url('cart') }}"><img src="{{ asset('images/cart.png') }}" class="icon-cart mx-3"
                            alt=""></a>

                    @auth
                        <div class="d-inline-block">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('images/profil.png') }}" width="40" height="40"
                                            class="icon-profil">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>

                                        <form action="/logout" method="POST">
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
                                <a class="nav-link" href="login">
                                    <img src="{{ asset('images/logo_login.png') }}" class="icon-profil">
                                </a>
                            </ul>
                        </div>
                    @endauth

                    {{-- <a href="profile"><img src="{{ asset('images/profil.png') }}" class="icon-profil mr-3"
                    alt=""></a> --}}
                </h5>
            </div>

        </div>
    </div>
</nav>
