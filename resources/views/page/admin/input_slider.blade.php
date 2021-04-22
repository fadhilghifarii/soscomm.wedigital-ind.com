@extends('layouts.admin_header')
@section('content')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-4">
                <h3 class="mt-5">Input Slider</h3>
                <hr>

                <form>
                <div class="form-group">
                    <label for="cover_foto_panti_asuhan">Cover Foto Slider 1</label>
                    <input type="file" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="link_panti_asuhan">Link Artikel Panti Asuhan 1</label>
                    <input type="text" class="form-control" placeholder="Masukan Link">
                  </div>

                  <div class="form-group">
                    <label for="cover_foto_panti_asuhan">Cover Foto Slider 2</label>
                    <input type="file" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="link_panti_asuhan">Link Artikel Panti Asuhan 2</label>
                    <input type="text" class="form-control" placeholder="Masukan Link">
                  </div>

                  <div class="form-group">
                    <label for="cover_foto_panti_asuhan">Cover Foto Slider 3</label>
                    <input type="file" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="link_panti_asuhan">Link Artikel Panti Asuhan 3</label>
                    <input type="text" class="form-control" placeholder="Masukan Link">
                  </div>

                  <div class="form-group">
                    <label for="cover_foto_panti_asuhan">Cover Foto Slider 4</label>
                    <input type="file" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="link_panti_asuhan">Link Artikel Panti Asuhan 4</label>
                    <input type="text" class="form-control" placeholder="Masukan Link">
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>


            </main>

@endsection
