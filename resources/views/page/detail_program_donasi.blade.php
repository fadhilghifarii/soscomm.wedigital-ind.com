@extends('layouts.guest_header')
@section('content')
        <div class="container mb-5" style="margin-top: 7%;">
            <div class="card shadow-sm">

                <div class="container">
                    <div class="py-5">
                      <h2>{{$p->nama}}</h2>
                      <p>Nama Panti : {{$p->panti->nama}}</p>
                      <p>Kategori : {{$p->ktg}}</p>
                      <div style="display:  flex; justify-content: center;">
                          <img src="{{asset('assets/images/program_donasi/'.$p->foto)}}" class="img-fluid mb-2" alt="Responsive image">
                      </div>


                    </div>

                    <div class="row">
                      {{-- <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                          <span class="text-muted">Donatur</span>
                        </h4>
                        <hr>
                        <ul class="list-group mb-3">
                          <li class="list-group-item d-flex justify-content-between lh-condensed">

                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1788c3741d3%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1788c3741d3%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.6953125%22%20y%3D%2217.003125%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                                    <div class="media-body pb-3 mb-0 small lh-125">
                                      <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Full Name</strong>
                                      </div>
                                      <span class="d-block">@username</span>
                                    </div>
                                  </div>

                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">

                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1788c3741d3%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1788c3741d3%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.6953125%22%20y%3D%2217.003125%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                                    <div class="media-body pb-3 mb-0 small lh-125">
                                      <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Full Name</strong>
                                      </div>
                                      <span class="d-block">@username</span>
                                    </div>
                                  </div>

                          </li>

                        </ul>


                      </div> --}}


                      <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Progres Realisasi :
                        @php
                            $real = ($p->progres/$p->target)*100;
                            echo $real."%";
                        @endphp
                        </h4>
                        <hr>
                        <h4 class="mb-3">Realisasi Terkumpul : Rp {{ number_format($p->progres, 0, ',', '.') }}</h4>
                        <hr>
                        <h4 class="mb-3">Dari Target : Rp {{ number_format($p->target, 0, ',', '.') }}</h4>
                        <hr>
                        <h4 class="mb-3">Deskripsi :</h4>
                        {!! $p->deskripsi !!}
                        <hr>
                        <div class="text-center mb-3">
                            <a href="{{url('/donasi')}}"><button class="btn btn-primary">Donasi</button></a>
                        </div>
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
