@extends('layouts.admin_header')
@section('content')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h3 class="mt-5">Program Donasi</h3>
                <hr>


                <div class="container">
                    <div class="row">
                      <div class="col-sm text-center">
                       <a href="{{url('/admin/add-program-donasi')}}"> <button type="button" class="btn btn-primary btn-sm">Add New Program Donasi</button></a>
                      </div>
                      <div class="col-sm">
                      </div>
                      <div class="col-sm">
                      </div>
                    </div>
                  </div>

                  <div class="container mt-3">

                    <div class="row">
                    @foreach ($donasi as $d)
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" alt="Thumbnail [100%x225]" src="{{asset('assets/images/program_donasi/'.$d->foto)}}" style="height: 225px; width: 100%; display: block;" >
                            <div class="card-body">
                              <p class="card-text">{!! \Illuminate\Support\Str::limit($d->deskripsi, 500, '...') !!}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                 <a href="{{url('/detail-panti-asuhan/'.$d->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                  <a href="{{url('admin/edit-program-donasi/'.$d->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                </div>
                                @php
                                    $awal  = date_create($d->created_at);
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

            </main>
@endsection
