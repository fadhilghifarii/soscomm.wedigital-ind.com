@extends('layouts.guest_header')
@section('content')

        <div class="container" style="margin-top: 7%;">
            <div class="card shadow-sm">

                <div class="container">
                    <div class="py-5">
                      <h2>Nama Panti Asuhan</h2>
                      <p>Pemilik :</p>
                      <p>Type :</p>
                      <p>Jenis Yayasan :</p>
                      <img src="smiling.jpg" class="img-fluid mb-2" alt="Responsive image">


                    </div>

                    <div class="row mb-3">
                      <div class="col-md-4 order-md-2 mb-4">
                        <ul class="list-group mb-3">
                          <li class="list-group-item d-flex justify-content-between lh-condensed">

                                <div class="media text-muted pt-3">
                                    <div class="media-body pb-3 mb-0 small lh-125">
                                      <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Tag Kebutuhan</strong>
                                      </div>
                                      <span class="d-block">Deskripsi Tag Kebutuhan</span>
                                    </div>
                                  </div>

                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">

                            <div class="media text-muted pt-3">
                            <div class="media-body pb-3 mb-0 small lh-125">
                              <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Tag Program</strong>
                              </div>
                              <span class="d-block">Deskripsi Tag Program</span>
                            </div>
                          </div>

                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">

                            <div class="media text-muted pt-3">
                            <div class="media-body pb-3 mb-0 small lh-125">
                              <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Jumlah Pengurus</strong>
                              </div>
                              <span class="d-block">123</span>
                            </div>
                          </div>

                          </li>

                        </ul>


                      </div>


                      <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Alamat :</h4>
                        <hr>
                        <h4 class="mb-3">Deskripsi :</h4>
                        <hr>
                        <h4 class="mb-3">Dari Target :</h4>
                        <hr>
                        <h4 class="mb-3">Deskripsi :</h4>
                        <hr>
                        <h4 class="mb-3">Deskripsi Kebutuhan :</h4>
                        <hr>
                        <h4 class="mb-3">Deskripsi Program :</h4>
                        <hr>
                        <h4 class="mb-3">Total Anak :</h4>
                        <p>Laki - Laki : </p>
                        <p>Perempuan : </p>
                        <p>Jumlah Anak : </p>
                        <hr>
                        <h4 class="mb-3">Akter Panti :</h4>
                        <img src="smiling.jpg" class="img-thumbnail">


                      </div>
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
