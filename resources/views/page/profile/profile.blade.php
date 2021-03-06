@extends('layout.main')

@section('container')
    <div class="content mt-5" style="padding-left: 65px;">
        <div class="profile">
            <div class="row">
                <div class="bg-transparent">
                    <div class="card-body">
                        <a href="{{ url('profile') }}" class="nav-link">
                            <h4 class="profil" style="color: #1ACBAA;">Profile</h4>
                        </a>
                        @can('customer')
                            <a href="{{ url('profile/transaction_list') }}" class="nav-link">
                                <h4 class="daftar-transaksi text-wrap" style="color: #828599;">Daftar<br>Transaksi</h4>
                            </a>
                        @endcan
                        @can('architect')
                            <a href="{{ url('profile/product') }}" class="nav-link">
                                <h4 class="produk" style="color: #828599;">Product</h4>
                            </a>
                            <a href="{{ url('profile/dashboard') }}" class="nav-link">
                                <h4 class="dashboard" style="color: #828599;">Dashboard</h4>
                            </a>
                        @endcan
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="kategori">
                        <div class="row mt-12" style="width: 53rem;">
                            <div class="col-sm-12">
                                <img src="images/Breadcrumb.png" alt="" width="830px">
                                <div class="rectangle">
                                    <img src="images/Rectangle 41.png" alt="" width="810px">
                                </div>
                                <div class="col-lg-10 profile-panel">
                                    <div class="col-lg">
                                        @if (Auth::user()->picture)
                                            <img src="{{ Auth::user()->picture }}" style="width:9%">
                                        @else
                                            <img src="{{ asset('images/profileImage.png') }}" alt="" width="58px">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg icon-manage">
                                    <img src="images/profileIcon.png" alt="">
                                </div>
                                <div class="profile-info">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5 class="font-weight-bold">{{ auth()->user()->username }}</h5>
                                            <p style="color: #718096; font-size: 14px;">{{ auth()->user()->email }}</p>
                                        </div>

                                        <div class="col-lg-3">
                                            @can('customer')
                                                <a id="Checkout" class="btn mb-4 btn-lg"
                                                    href="{{ url('profile/open_store') }}"> Buka
                                                    Toko
                                                </a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('profile.put') }}" class="row g-12 mt-5"
                                    style="background-color: #F7F8FA;" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-6 mt-4">
                                        <label for="username" class="form-label font-weight-bold">Username</label>
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            value="{{ old('username', auth()->user()->username) }}">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="province" class="form-label font-weight-bold">Province</label>
                                        <select name="province" class="form-control" id="province">
                                            <option id="select-province" value="" selected>Select Province</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">{{ $province->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="email" class="form-label font-weight-bold">Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            value="{{ old('email', auth()->user()->email) }}">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="city" class="form-label font-weight-bold">City</label>
                                        <select name="city" class="form-control" id="city" onchange="idcity(this.value)">
                                            <option id="select-city" value="" selected>Select City</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="phone_number" class="form-label font-weight-bold">Contact Number</label>
                                        <input type="text" name="phone_number"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            id="phone_number"
                                            value="{{ old('phone_number', auth()->user()->phone_number) }}">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="password" class="form-label font-weight-bold">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="inputPassword">
                                    </div>
                                    <div class="col-md-12 mt-4 mb-5">
                                        <label for="address" class="form-label font-weight-bold">Address</label>
                                        <input type="text" name="address"
                                            class="form-control @error('address') is-invalid @enderror" id="inputAdddress"
                                            value="{{ old('address', auth()->user()->address) }}">
                                    </div>
                                    <div class="col-12 mt-4 mb-5 text-md-right">
                                        <button id="Checkout" type="submit"
                                            class="btn mb-3 btn-lg pl-4 pr-4 rounded">Save</button>
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

@push('js')
    <script>
        $('form').each(function() {
            this.reset()
        });

        $('#province').change(function() {
            $("#province option[id='select-province']").hide()
            $.ajax({
                type: 'GET',
                url: '/profile/cities/' + $(this).val(),
                success: function(data) {
                    $('#city').empty().append(
                        data.map(function(item) {
                            return `<option value="${item.id}">${item.name}</option>`
                        })
                    )
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('XHR', xhr);
                    console.log('status', textStatus);
                    console.log('Error in', errorThrown);
                }
            });
        });
    </script>
@endpush
