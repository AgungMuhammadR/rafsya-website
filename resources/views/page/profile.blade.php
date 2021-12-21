@extends('layout.main')

@section('container')
    <div class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-2 bg-transparent">
                    <div class="card-body">
                        <a href="modern.html" class="nav-link">
                            <h4 class="modern" style="color: #1ACBAA;">Profil</h4>
                        </a>
                        <a href="komtemporer.html" class="nav-link">
                            <h4 class="komtemporer" style="color: #828599;">Product</h4>
                        </a>
                        <a href="coastal_style.html" class="nav-link">
                            <h4 class="coastal_style" style="color: #828599;">Chat</h4>
                        </a>
                        <a href="eklektik.html" class="nav-link">
                            <h4 class="eklektik" style="color: #828599;">Pesanan</h4>
                        </a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="kategori">
                        <div class="row mt-12" style="width: 68rem;">
                            <div class="col-sm-12">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                <form class="row g-12 mt-5" style="background-color: #F7F8FA;">
                                    <div class="col-6 mt-4">
                                        <label for="inputName" class="form-label font-weight-bold">Username</label>
                                        <input type="email" class="form-control" id="inputName" placeholder="esthera">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="inputCity" class="form-label font-weight-bold">City</label>
                                        <input type="password" class="form-control" id="inputCity"
                                            placeholder="Jakarta Selatan">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="inputAddress" class="form-label font-weight-bold">Email</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="esthera@simmmple.com">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="inputCounty" class="form-label font-weight-bold">country</label>
                                        <input type="text" class="form-control" id="inputCounty" placeholder="Indonesia">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="inputNumber" class="form-label font-weight-bold">Countact Number</label>
                                        <input type="text" class="form-control" id="inputNumber"
                                            placeholder="0842-1746-1143">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="inputPassword" class="form-label font-weight-bold">Password</label>
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <label for="inputAddress" class="form-label font-weight-bold">Addresss</label>
                                        <input type="text" class="form-control" id="inputAdddress"
                                            placeholder="Jl. Kemang Utara C No 42">
                                    </div>
                                    <div class="col-12 mt-4 mb-5 text-md-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
