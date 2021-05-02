@extends('layouts.guest_header')
@section('content')

        <div class="container" style="margin-top: 7%;">
            <div class="card shadow-sm">

                <div class="container">
                    <div class="py-5">
                      <h2>{{$pt->nama}}</h2>
                      <p>Pemilik : {{$pt->pemilik}}</p>
                      <p>Type : {{$pt->tipe}}</p>
                      <p>Jenis Yayasan : {{$pt->jenis}}</p>
                      <div style="display: flex;justify-content:center;">
                        <img src="{{asset('assets/images/panti/'.$pt->foto)}}" class="img-fluid mb-2" alt="Responsive image">
                      </div>


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
                                      <span class="d-block">{{$pt->kebutuhan}}</span>
                                    </div>
                                  </div>

                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">

                            <div class="media text-muted pt-3">
                            <div class="media-body pb-3 mb-0 small lh-125">
                              <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Tag Program</strong>
                              </div>
                              <span class="d-block">{{$pt->program}}</span>
                            </div>
                          </div>

                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">

                            <div class="media text-muted pt-3">
                            <div class="media-body pb-3 mb-0 small lh-125">
                              <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Jumlah Pengurus</strong>
                              </div>
                              <span class="d-block">{{$pt->jml_pgrs}}</span>
                            </div>
                          </div>

                          </li>

                        </ul>


                      </div>


                      <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Alamat : {{$pt->alamat}}</h4>
                        <hr>
                        <h4 class="mb-3">Deskripsi :</h4>
                        {!!$pt->deskripsi!!}
                        <hr>
                        {{-- <h4 class="mb-3">Dari Target :</h4>
                        <hr> --}}
                        <h4 class="mb-3">Total Anak :</h4>
                        <p>Laki - Laki : {{$pt->t_pria}}</p>
                        <p>Perempuan : {{$pt->t_wanita}}</p>
                        <p>Jumlah Anak :
                        @php
                            echo ($pt->t_pria + $pt->t_wanita);
                        @endphp
                        </p>
                        <hr>
                        <h4 class="mb-3">Akte Panti :</h4>
                        <img src="{{asset('assets/images/akte/'.$pt->akte)}}" class="img-thumbnail">


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
