@extends('layouts.guest_header')
@section('content')

        <div class="container" style="margin-top: 7%;">
            <div class="card shadow-sm">

                    <div class="card-body">
                            <h4 class="text-center">Lengkapi Identitas </h4>
                            <hr>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-google"></i> Login dengan Google</button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-male"></i> Masuk dengan Form Manual</button>
                            </div>
                            <hr>
                            <h4 class="text-center mt-3">ATAU</h4>
                            <p class="text-center">Donasi Tanpa Registrasi. Dengan Cara Isi Kolom Dibawah Ini.</p>
                            <hr>

                            <form>


                                <div class="container">
                                    <div class="row">
                                      <div class="col-sm">

                                      </div>
                                      <div class="col-sm">
                                        <input type="text" class="form-control mt-2" placeholder="Nama Lengkap">
                                        <input type="email" class="form-control mt-2" placeholder="Email">
                                        <input type="number" class="form-control mt-2" placeholder="Nomor Telepon">
                                      </div>
                                      <div class="col-sm">

                                      </div>
                                    </div>
                                  </div>

                                  <p class="text-center mt-3">Pastikan email dan nomor anda sesuai karena konfirmasi dan laporan akan dikirim via Emai </p>
                                  <hr>

                                  <div class="container">
                                    <div class="row">
                                      <div class="col-sm">

                                      </div>
                                      <div class="col-sm text-center">
                                          <h4 class="mb-4">Pilih Metode Pembayaran</h4>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input mt-5" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <img src="smiling2.jpg" style="width: 200;">
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input mt-5" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            <img src="smiling2.jpg" style="width: 200;">
                                          </div>
                                          <div class="form-check mt-2">
                                            <input class="form-check-input mt-5" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            <img src="smiling2.jpg" style="width: 200;">
                                          </div>
                                          <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1" style="font-size: 80%;">
                                              Saya setuju dengan <a href="#">Syarat & Ketentuan</a> Kapiler Indonesia
                                            </label>
                                          </div>
                                      </div>
                                      <div class="col-sm">

                                      </div>
                                    </div>
                                  </div>


                                <div class="form-row text-center">
                                        <div class="col mt-2">
                                <button type="button" class="btn btn-sm btn-primary" href="#">Donasi</button>
                               </div>
                            </div>


                              </form>

                    </div>


                          </div>

                  </div>
    </div>

@endsection
@section('script')


<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
                      document.body.scrollTop = 0;
                      document.documentElement.scrollTop = 0;
                    }
                    </script>
@endsection
