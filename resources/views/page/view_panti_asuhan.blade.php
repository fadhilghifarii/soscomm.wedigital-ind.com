@extends('layouts.guest_header')
@section('content')

        <div class="container" style="margin-top: 7%;">
            <div class="card shadow-sm">
                    <section class="jumbotron">
                      <div class="container">
                        <h5 class="text-center">Panti Asuhan Tergabung </h5>
                        <hr>
                        <form method="post" action="{{url('/view-panti-asuhan-search')}}">
                            @csrf
                            <div class="form-row">
                              <div class="col-md-9 mb-3">
                                <input type="text" name="nama" class="form-control" id="validationDefault01" placeholder="Cari Panti">
                              </div>
                              {{-- <div class="col-md-1 mb-3 text-center">
                               <p>ATAU</p>

                              </div>
                              <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="validationDefault01" placeholder="Cari Kota">
                              </div> --}}
                              <div class="col-md-3 mb-3 text-center">
                                <button class="btn btn-primary" type="submit">Search</button>
                              </div>
                            </div>
                          </form>
                      </div>
                    </section>

                    <div class="album py-5 bg-light">
                      <div class="container">
                        <div class="row">
                        @foreach ($panti as $pt)
                          <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                              <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('assets/images/panti/'.$pt->foto)}}">
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted text-center">{{$pt->nama}}</h6>
                                <hr>
                                <p class="card-text">{!! \Illuminate\Support\Str::limit($pt->deskripsi, 500, '...') !!}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <a href="{{url('/detail-panti-asuhan/'.$pt->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                  </div>
                                  @php
                                    $awal  = date_create($pt->created_at);
                                    $akhir = date_create(); // waktu sekarang
                                    $diff  = date_diff( $awal, $akhir );
                                  @endphp
                                    <small class="text-muted">
                                        @php
                                            if($diff->y!=0){echo $diff->y . ' tahun lalu';}
                                            else if($diff->m!=0){echo $diff->m . ' bulan lalu';}
                                            else if($diff->d!=0){echo $diff->d . ' hari lalu';}
                                            else if($diff->h!=0){echo $diff->h . ' jam lalu';}
                                            else if($diff->i!=0){echo $diff->i . ' menit lalu';}
                                        @endphp
                                    </small>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
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
