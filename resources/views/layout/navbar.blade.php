<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">

        <a class="navbar-brand" href="#"></a> <img width="100 " src="{{ asset('images/logo.png') }}" alt="#" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

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
                    <a href="cart"><img src="{{ asset('images/cart.png') }}" class="icon-cart ml-3 mr-3" alt=""></a>
                    <a href="profile"><img src="{{ asset('images/profil.png') }}" class="icon-profil mr-3" alt=""></a>
                </h5>
            </div>

        </div>
    </div>
</nav>
