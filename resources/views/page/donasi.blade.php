@extends('layouts.guest_header') @section('content')
<div class="container" style="margin-top: 7%;">
   @if (session('berhasil'))
    <div class="alert alert-success" role="alert">
        Berhasil Membuat Donasi Silahkan Cek Email Anda <b>{{session('berhasil')}}</b> untuk Melanjutkan Pembayaran
    </div>
    @endif
	<div class="card shadow-sm">
		<div class="card-body">
            @cannot('isDonatur')
			<h4 class="text-center">Lengkapi Identitas </h4>
			<hr>
			<div class="text-center">
				<a href="{{url('/auth/redirect')}}" class="btn btn-primary btn-sm"><i class="fa fa-google"></i> Login dengan Google</a>
				<a href="{{url('/login/'.$id_program)}}" class="btn btn-secondary btn-sm"><i class="fa fa-male"></i> Masuk dengan Form Manual</a>
			</div>
			<hr>
			<h4 class="text-center mt-3">ATAU</h4>
			<p class="text-center">Donasi Tanpa Registrasi. Dengan Cara Isi Kolom Dibawah Ini.</p>
			<hr>
            @endcannot
			<form method="post" action="{{url('/donasi-proses/'.$id_program)}}">
                @csrf
                @cannot('isDonatur')
				<div class="container">
					<div class="row">
						<div class="col-sm"> </div>
						<div class="col-sm">
							<input type="text" name="nama" class="form-control mt-2" placeholder="Nama Lengkap" required>
							<input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
							<input type="number" name="hp" class="form-control mt-2" placeholder="Nomor Telepon" required>
							<input type="number" name="jumlah" class="form-control mt-2" placeholder="Jumlah" required>
                        </div>
						<div class="col-sm"> </div>
					</div>
				</div>
				<p class="text-center mt-3">Pastikan email dan nomor anda sesuai karena konfirmasi dan laporan akan dikirim via Email </p>
				<hr>
                @endcannot
				<div class="container">
					<div class="row">
						<div class="col-sm"> </div>
						<div class="col-sm text-center">
                            <input type="hidden" name="id_p" value="{{$id_program}}">
                            @can('isDonatur')
                            <div class="form-group mb-2">
                                <input type="number" name="jumlah" class="form-control" placeholder="jumlah donasi" required>
                            </div>
                            <hr>
                            @endcan
							<h4 class="mb-4">Pilih Metode Pembayaran</h4>
                            @foreach ($rekening as $r)
                            @if(!empty($r->bank) || !empty($r->nama) || !empty($r->norek))
                            @endif
							<div class="form-group mb-2">
                                <img src="{{asset('assets/images/rek_admin/'.$r->foto)}}" style="width: 150px;">
                            </div>
                            <div class="form-group mb-2">
                                <h5>BANK : {{$r->bank}}</h5>
                                <h5>Atas Nama : {{$r->nama}}</h5>
                                <h5>Nomor Rekening : {{$r->norek}}</h5>
                            </div>
                            @endforeach
							<div class="form-check mt-3">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
								<label class="form-check-label" for="defaultCheck1" style="font-size: 80%;"> Saya setuju dengan <a href="#">Syarat & Ketentuan</a> Kapiler Indonesia </label>
							</div>
						</div>
						<div class="col-sm"> </div>
					</div>
				</div>
				<div class="form-row text-center">
					<div class="col mt-2">
						<button type="submit" class="btn btn-sm btn-primary" href="#" style="background-color: #fc3c3c;">Donasi</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div> @endsection @section('script')
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
	scrollFunction()
};

function scrollFunction() {
	if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
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
<script>
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
var firebaseConfig = {
	apiKey: "AIzaSyBfrhxh00qjfJAen3lzczKWXnbMrFjP-bw",
	authDomain: "donasi-3fa7c.firebaseapp.com",
	projectId: "donasi-3fa7c",
	storageBucket: "donasi-3fa7c.appspot.com",
	messagingSenderId: "799253297295",
	appId: "1:799253297295:web:e1338d48884c09095058fa",
	measurementId: "G-FMG2WH33PM"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();
</script> @endsection
