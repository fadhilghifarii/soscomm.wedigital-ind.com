@extends('layouts.admin_header')
@section('link')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
   <h3 class="mt-5">Edit Article</h3>
   <hr>
   <form method="post" action="{{ url('admin/edit-article-submit') }}" enctype="multipart/form-data">
       @csrf
       <input type="hidden" name="id" value="{{$a->id}}">
      <div class="form-group">
         <label for="judul_article">Judul</label>
         <input type="text" name="judul" value="{{$a->judul}}" class="form-control" placeholder="Masukan Judul Article" required>
      </div>
      <div class="form-group">
         <label for="foto_article">Cover Article</label>
         <input type="file" name="foto" class="form-control-file">
      </div>
      <div class="form-group">
         <label for="deskripsi_article">Deskripsi Article</label>
         <textarea id="summernote" name="deskripsi" required>{{$a->deskripsi}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</main>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function(){
    $('#summernote').summernote({
      placeholder: 'Tulis Deskripsi',
      tabsize: 2,
      height: 200
    });
})
</script>

@endsection
