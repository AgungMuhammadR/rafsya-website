@extends('layout.main')

@section('container')
<div class="content mt-5" style="padding-left: 65px;">
    <div class="profile">
            <div class="row">
                <div class="col-md-2 bg-transparent">
                    <div class="card-body">
                        <a href="#" class="nav-link">
                            <h4 class="profile" style="color: #1ACBAA;">Profil</h4>
                        </a>
                        <a href="" class="nav-link">
                            <h4 class="produk" style="color: #828599;">Product</h4>
                        </a>
                        <a href="" class="nav-link">
                            <h4 class="chat" style="color: #828599;">Chat</h4>
                        </a>
                        <a href="" class="nav-link">
                            <h4 class="pesanan" style="color: #828599;">Pesanan</h4>
                        </a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="kategori">
                        <div class="row mt-12" style="width: 70rem;">
                            <div class="col-sm-12">
                                <img src="images/Breadcrumb.png" alt="">
                                    <div class="rectangle">
                                        <img src="images/Rectangle 41.png" alt="">
                                    </div>
                                    <div class="col-lg-10 profile-panel">
                                        <div class="col-lg">
                                            <img src="images/profileImage.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg icon-manage">
                                        <img src="images/profileIcon.png" alt="">
                                    </div>
                                    <div class="profile-info">
                                        <h5 class="font-weight-bold">Angela Trinata</h5>
                                        <p style="color: #718096; font-size: 14px;">angela@example.com</p>
                                    </div>
                                {{-- <h1>Id : {{ auth()->user()->id }}</h1> --}}
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                <form action="profile/update" class="row g-12 mt-5" style="background-color: #F7F8FA;"
                                    method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-6 mt-4">
                                        <label for="username" class="form-label font-weight-bold">Username</label>
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="agungmr07">
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
                                            placeholder="agungambisbanget@gmail.com">
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
                                            id="phone_number" placeholder="0842-1746-1143">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="password" class="form-label font-weight-bold">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="inputPassword" placeholder="">
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <label for="address" class="form-label font-weight-bold">Address</label>
                                        <input type="text" name="address"
                                            class="form-control @error('address') is-invalid @enderror" id="inputAdddress"
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
