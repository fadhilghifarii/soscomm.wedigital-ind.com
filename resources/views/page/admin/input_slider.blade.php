@extends('layouts.admin_header')
@section('content')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-4">
                <h3 class="mt-5">Input Slider</h3>
                <hr>

                <form method="post" action="{{url('/admin/input-slider-submit')}}" enctype="multipart/form-data">
                @csrf
                @foreach ($slider as $s)
                <div class="form-group">
                    <label for="cover_foto_panti_asuhan">Cover Foto Slider {{$s->id}}</label>
                    <input type="file" name="foto_slider{{$s->id}}" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="link_panti_asuhan">Judul Artikel Panti Asuhan {{$s->id}}</label>
                    <input type="text" value="{{$s->judul}}" name="judul_slider{{$s->id}}" class="form-control" placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                    <label for="link_panti_asuhan">Deskripsi Artikel Panti Asuhan {{$s->id}}</label>
                    <textarea class="form-control" name="desk_slider{{$s->id}}" placeholder="Masukan Deskripsi">{{$s->deskripsi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="link_panti_asuhan">Link Artikel Panti Asuhan {{$s->id}}</label>
                    <input type="text" value="{{$s->link}}" name="link_slider{{$s->id}}" class="form-control" placeholder="Masukan Link">
                </div>
                <hr>
                @endforeach
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>


            </main>

@endsection
