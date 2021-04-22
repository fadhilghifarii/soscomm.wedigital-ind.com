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
                                            <img src="{{asset('assets/images/smiling2.jpg')}}" style="width: 200px;">
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input mt-5" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            <img src="{{asset('assets/images/smiling2.jpg')}}" style="width: 200px;">
                                          </div>
                                          <div class="form-check mt-2">
                                            <input class="form-check-input mt-5" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            <img src="{{asset('assets/images/smiling2.jpg')}}" style="width: 200px;">
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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>

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


<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBfrhxh00qjfJAen3lzczKWXnbMrFjP-bw",
    authDomain: "donasi-3fa7c.firebaseapp.com",
    projectId: "donasi-3fa7c",
    storageBucket: "donasi-3fa7c.appspot.com",
    messagingSenderId: "799253297295",
    appId: "1:799253297295:web:e1338d48884c09095058fa",
    measurementId: "G-FMG2WH33PM"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
@endsection
