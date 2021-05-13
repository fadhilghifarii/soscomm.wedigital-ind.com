@extends('layouts.admin_header')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-4">
    <h3 class="mt-5">Input Nomor Rekening</h3>
    <hr>
    <form method="post" action="{{url('/admin/input-rek-submit')}}" enctype="multipart/form-data">
    @csrf
    @foreach ($rekening as $r)
        <div class="form-group">
            <label for="cover_foto_rekening">Cover Rekening {{$r->id}}</label>
            <input type="file" name="foto{{$r->id}}" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="nama_bank">Nama Bank {{$r->id}}</label>
            <input type="text" name="bank{{$r->id}}" class="form-control" placeholder="Masukan Nama Bank" value="{{$r->bank}}">
        </div>
        <div class="form-group">
            <label for="atas_nama_rekening">Atas Nama Rekening {{$r->id}}</label>
            <input type="text" name="nama{{$r->id}}" class="form-control" placeholder="Masukan Atas Nama Rekening" value="{{$r->nama}}">
        </div>
        <div class="form-group">
            <label for="no_rekening">Nomor Rekening {{$r->id}}</label>
            <input type="number" name="norek{{$r->id}}" class="form-control" placeholder="Masukan Nomor Rekening" value="{{$r->norek}}">
        </div>
        <hr>
    @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>
@endsection
