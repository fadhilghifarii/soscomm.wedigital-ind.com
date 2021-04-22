@extends('layouts.admin_header')
@section('link')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h3 class="mt-5">Add New Program Donasi</h3>
    <hr>

    <form method="post" action="{{url('/admin/add-program-donasi-submit')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="nama_program_donasi">Nama Program Donasi</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Program Donasi" required>
        </div>

        <div class="form-group">
            <label for="nama_panti_asuhan">Nama Panti Asuhan</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="panti" required>
                <option selected disabled>Pilih Panti Asuhan</option>
                @foreach ($panti as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
                @endforeach
              </select>
          </div>

          <div class="form-group">
            <label for="kategori_program_donasi">Kategori Program Donasi</label>
            <input type="text" class="form-control" placeholder="Masukan Kategori Program Donasi" name="ktg" required>
          </div>

          <div class="form-group">
            <label for="foto_program_donasi">Foto Program Donasi</label>
            <input type="file" class="form-control-file" name="foto" required>
        </div>

        <div class="form-group">
            <label for="progres_realisaasi">Progres Realisasi</label>
            <input type="number" class="form-control" placeholder="Masukan Persentasi Donasi Saat Ini" name="progres" required>
          </div>

          <div class="form-group">
            <label for="target_donasi">Target Donasi</label>
            <input type="number" class="form-control" placeholder="Masukan Target Donasi" name="target" required>
          </div>

          <div class="form-group">
            <label for="deskripsi_program_donasi">Deskripsi Program Donasi</label>
            <textarea id="summernote" name="deskripsi" required></textarea>

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
