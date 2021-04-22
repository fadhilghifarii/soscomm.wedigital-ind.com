@extends('layouts.admin_header')
@section('link')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h3 class="mt-5">Edit Program Donasi</h3>
    <hr>

    <form>
        <div class="form-group">
          <label for="nama_program_donasi">Nama Program Donasi</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Program Donasi">
        </div>

        <div class="form-group">
            <label for="nama_panti_asuhan">Nama Panti Asuhan</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="panti">
                <option selected disabled>Pilih Panti Asuhan</option>
                <option value="1">Panti 1</option>
                <option value="2">Panti 2</option>
              </select>
          </div>

          <div class="form-group">
            <label for="kategori_program_donasi">Kategori Program Donasi</label>
            <input type="text" class="form-control" placeholder="Masukan Kategori Program Donasi" name="ktg">
          </div>

          <div class="form-group">
            <label for="foto_program_donasi">Foto Program Donasi</label>
            <input type="file" class="form-control-file" name="foto">
        </div>

        <div class="form-group">
            <label for="progres_realisaasi">Progres Realisasi</label>
            <input type="number" class="form-control" placeholder="Masukan Persentasi Donasi Saat Ini" name="progres">
          </div>

          <div class="form-group">
            <label for="target_donasi">Target Donasi</label>
            <input type="number" class="form-control" placeholder="Masukan Target Donasi" name="target">
          </div>

          <div class="form-group">
            <label for="deskripsi_program_donasi">Deskripsi Program Donasi</label>
            <textarea id="summernote"></textarea>

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
