@extends('layouts.admin_header')
@section('link')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h3 class="mt-5">Edit Panti</h3>
    <hr>

    <form method="post" action="{{url('/admin/edit-panti-submit')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$p->id}}" />
        <div class="form-group">
          <label for="nama_panti_asuhan">Nama Panti Asuhan</label>
          <input type="text" name="nama" class="form-control" value="{{$p->nama}}" required placeholder="Masukan Nama Panti Asuhan">
        </div>

        <div class="form-group">
            <label for="nama_pemilik_panti_asuhan">Nama Pemilik Panti Asuhan</label>
            <input type="text" name="pemilik" class="form-control" value="{{$p->pemilik}}" required placeholder="Masukan Nama Pemilik Panti Asuhan">
          </div>

          <div class="form-group">
            <label for="tipe_panti_asuhan">Tipe Panti Asuhan</label>
            <input type="text" name="tipe" class="form-control" value="{{$p->tipe}}" required placeholder="Masukan Tipe Panti Asuhan">
          </div>

          <div class="form-group">
            <label for="jenis_yayasan">Jenis Yayasan</label>
            <input type="text" name="jenis" class="form-control" value="{{$p->jenis}}" required placeholder="Masukan Jenis Yayasan">
          </div>

          <div class="form-group">
            <label for="foto_panti_asuhan">Foto Panti Asuhan</label>
            <input type="file" name="foto" class="form-control-file" >
        </div>

        <div class="form-group">
            <label for="alamat_panti_asuhan">Alamat Panti Asuhan</label>
            <textarea class="form-control" rows="3" name="alamat" required>{{$p->alamat}}</textarea>
          </div>



          <div class="form-group">
            <label for="deskripsi_panti_asuhan">Deskripsi Panti Asuhan</label>
        <textarea id="summernote" name="deskripsi" required>{{$p->deskripsi}}</textarea>

          </div>

          <div class="form-group">
            <label for="kebutuhan_panti_asuhan">Kebutuhan Panti Asuhan</label>
            <textarea class="form-control" rows="3" name="kebutuhan" required>{{$p->kebutuhan}}</textarea>
          </div>


          <div class="form-group">
            <label for="total_anak">Total Anak</label>
          <div class="row">
            <div class="col">

              <input type="number" name="t_pria" class="form-control" value="{{$p->t_pria}}" placeholder="Laki - Laki" required>
            </div>
            <div class="col">
              <input type="number" name="t_wanita" class="form-control" value="{{$p->t_wanita}}" placeholder="Perempuan" required>
            </div>
          </div>
          </div>

          <div class="form-group">
            <label for="foto_akte_panti_asuhan">Foto Akte Panti Asuhan</label>
            <input type="file" name="akte" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="tag_program_panti_asuhan">Program Panti Asuhan</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="program" required>
                <option disabled>Pilih Program Panti Asuhan</option>
                <option value="Pendidikan" @php if($p->program=="Pendidikan"){echo "selected";} @endphp>Pendidikan</option>
                <option value="Seni" @php if($p->program=="Seni"){echo "selected";} @endphp>Seni</option>
              </select>
          </div>

          <div class="form-group">
            <label for="pengurus_panti_asuhan">Jumlah Pengurus Panti Asuhan</label>
            <input type="number" name="jml_pgrs" class="form-control" value="{{$p->jml_pgrs}}" placeholder="Masukan Jumlah Pengurus Panti Asuhan" required>
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
