@extends('layout.main')

@section('container')
    <div class="content mt-5" style="padding-right: 100px">
        <div class="profil">

            <div class="row">
                <div class="konsultasi" style="width: 40rem;">
                    <h4 class="font-weight-bold mb-3 text-center" style="color: #002678;">Konsultasi</h4>
                    <p class="text-center">Silahkan pilih platform untuk melakukan <br>
                        konsultasi dengan arsitek</p>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <button
                                class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom shadow"
                                type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <div class="container">
                                    <a href="{{ url('https://mail.google.com/mail/?view=cm&fs=1&to=xaverius0001@gmail.com') }}"
                                        target="_blank">
                                        <div class="d-flex" style="padding-left: 90px;">
                                            <img src="images/icongmail.png" width="53%">
                                        </div>
                                    </a>
                                    <div class="mt-5" style="text-align: center;">E-Mail</div>
                                </div>
                            </button>
                        </div>

                        <div class="col-sm-6">
                            <button
                                class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom shadow"
                                type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <div class="container">
                                    <a href="{{ url('http://api.whatsapp.com/send?phone=6281341555959') }}"
                                        target="_blank">
                                        <div class="d-flex" style="padding-left: 90px;">
                                            <img src="images/whatsapp.png" width="40%">
                                        </div>
                                    </a>
                                    <div class="mt-5" style="text-align: center;">Whatsapp</div>
                                </div>
                            </button>
                        </div>
                        <img src="images/gmrilustration.png" alt="" width="50%" class="mt-5 mb-5">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
