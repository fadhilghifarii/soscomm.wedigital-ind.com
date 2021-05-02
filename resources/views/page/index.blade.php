@extends('layouts.guest_header') @section('content')
<!--Slider-->
<div class="pt-5" style="background-color:#F0F0F0; padding-bottom:1%;">
	<div class="container" style="margin-top: 5%;">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators"> @php $no=0; foreach ($slider as $s){ if(!empty($s->slider)){ if($no==0){ echo '
				<li data-target="#demo" data-slide-to="'.$no++.'" class="active"></li>'; }else{ echo '
				<li data-target="#demo" data-slide-to="'.$no++.'"></li>'; } } } @endphp </ul>
			<div class="carousel-inner text-center"> @php $no=0; foreach ($slider as $s){ if(!empty($s->slider)){ if($no==0){ $no++; echo '
				<div class="carousel-item active"> <a href="'.$s->link.'">
                                        <img src="assets/images/slider/'.$s->slider.'" alt="'.$s->judul.'" width="900" height="500">
                                    </a>
					<div class="carousel-caption">
						<h3>'.$s->judul.'</h3>
						<p>'.$s->deskripsi.'</p>
					</div>
				</div> '; }else{ echo '
				<div class="carousel-item"> <a href="'.$s->link.'">
                                        <img src="assets/images/slider/'.$s->slider.'" alt="'.$s->judul.'" width="900" height="500">
                                    </a>
					<div class="carousel-caption">
						<h3>'.$s->judul.'</h3>
						<p>'.$s->deskripsi.'</p>
					</div>
				</div> '; } } } @endphp </div>
			<a class="carousel-control-prev carousel" href="#demo" data-slide="prev"> <i class="fa fa-caret-square-o-left" style="color: black; font-size: 150%;"></i> </a>
			<a class="carousel-control-next" href="#demo" data-slide="next"> <i class="fa fa-caret-square-o-right" style="color: black; font-size: 150%;"></i> </a>
		</div>
	</div>
</div>
<!--Grid 4 items-->
<div class="container" style="margin-top:2%;">
	<div class="row text-center">
		<div class="col-sm">
			<div class="card" style="width: 15rem;"> <i class="fa fa-instagram fa-5x mx-auto"></i>
				<div class="card-body">
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<hr>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="card" style="width: 15rem;"> <i class="fa fa-instagram fa-5x mx-auto"></i>
				<div class="card-body">
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<hr>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="card" style="width: 15rem;"> <i class="fa fa-instagram fa-5x mx-auto"></i>
				<div class="card-body">
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<hr>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="card" style="width: 15rem;"> <i class="fa fa-instagram fa-5x mx-auto"></i>
				<div class="card-body">
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<hr>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Grid with slider-->
<div class="container" style="margin-top: 7%;">
	<h5 class="text-center">Program Donasi </h5>
	<hr>
	<div id="demoi" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demoi" data-slide-to="0" class="active"></li>
            @php
            if($program_count>3){
                echo '<li data-target="#demoi" data-slide-to="1"></li>';
            }
            @endphp

		</ul>
		<div class="carousel-inner">
            @php
                $count = $program;
                $no=1;
            @endphp
			<div class="carousel-item active">
				<div class="container d-flex justify-content-center">
					<div class="row">
                        @foreach ($program as $p)
                        <?php
                            if($no<=3){
                        ?>
                        <div class="col-sm">
							<div class="card" style="width: 18rem;">
                                <img src="{{asset('assets/images/program_donasi/'.$p->foto)}}">
								<div class="card-body">
                                    <a href="{{url('/detail-program-donasi/'.$p->id)}}">
                                        <h6 class="card-subtitle mb-2 text-muted text-center">{{$p->nama}}</h6>
                                    </a>
									<hr>
									<p class="card-text">{!! \Illuminate\Support\Str::limit($p->deskripsi, 500, '...') !!}</p>
									<a href="donasi.php">
										<button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #fc3c3c;">Donasi</button>
									</a>
								</div>
							</div>
						</div>
                        <?php
                                $no++;
                            }
                        ?>
                        @endforeach
					</div>
				</div>
			</div>

        <?php
        if($no>3){
            $no2=0;
        ?>
        <!--Grid with slider 2-->
		<div class="carousel-item">
			<div class="container d-flex justify-content-center">
				<div class="row">
                    @foreach ($program as $p)
                    <?php
                        $no2++;
                        if($no2>3){
                    ?>
					<div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/images/program_donasi/'.$p->foto)}}">
                            <div class="card-body">
                                <a href="{{url('/detail-program-donasi/'.$p->id)}}">
                                    <h6 class="card-subtitle mb-2 text-muted text-center">{{$p->nama}}</h6>
                                </a>
                                <hr>
                                <p class="card-text">{!! \Illuminate\Support\Str::limit($p->deskripsi, 500, '...') !!}</p>
                                <a href="donasi.php">
                                    <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #fc3c3c;">Donasi</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    @endforeach
				</div>
			</div>
		</div>
        <?php
        }
        ?>

	</div>
    </div>
    @php
    if($program_count>3){
        echo '
        <a class="carousel-control-prev" href="#demoi" data-slide="prev"> <span class="carousel-control-prev-icon bg-dark" style="margin-right: 50%;"></span> </a>
	    <a class="carousel-control-next" href="#demoi" data-slide="next"> <span class="carousel-control-next-icon bg-dark" style="margin-left: 50%;"></span> </a>
        ';
    }
    @endphp

</div>
<div class="row">
	<div class="col text-center mt-3">
		<a href="view_program_donasi.php">
			<a class="btn btn-primary" href="{{url('/view-program-donasi')}}" style="background-color: #fc3c3c;">See More</a>
		</a>
	</div>
</div>
</div>
<!--Grid 6 items-->
<div style="background-color:#F0F0F0; padding-bottom:1%;">
	<div class="container de-flex justify-content-center" style="margin-top: 7%; ">
		<h5 class="text-center pt-3">Panti Asuhan Tergabung</h5>
		<hr>
		<div class="row de-flex">
            @foreach ($panti as $pt)
			<div class="col-sm-4 mt-4">
				<div class="card" style="width: auto;">
                    <img src="{{asset('assets/images/panti/'.$pt->foto)}}">
					<div class="card-body">
                        <a href="{{url('/detail-panti-asuhan/'.$pt->id)}}">
                            <h6 class="card-subtitle mb-2 text-muted">{{$pt->nama}}</h6>
                        </a>
						<hr>
						<p class="card-text">{!! \Illuminate\Support\Str::limit($p->deskripsi, 500, '...') !!}</p>
					</div>
				</div>
			</div>
            @endforeach
		</div>
        <div class="row">
			<div class="col text-center mt-2">
				<a href="view_panti_asuhan.php">
					<a class="btn btn-primary" href="{{url('/view-panti-asuhan')}}" style="background-color: #fc3c3c;">See More</a>
				</a>
			</div>
		</div>
	</div>
	{{-- <!--New line-->
	<div class="container de-flex justify-content-center mt-4">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: auto;"> <i class="fa fa-phone fa-5x mx-auto"></i>
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<hr>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: auto;"> <i class="fa fa-phone fa-5x mx-auto"></i>
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<hr>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: auto;"> <i class="fa fa-phone fa-5x mx-auto"></i>
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<hr>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col text-center mt-2">
				<a href="view_panti_asuhan.php">
					<button class="btn btn-primary" style="background-color: #fc3c3c;">See More</button>
				</a>
			</div>
		</div>
	</div> --}}
</div>
<!--Info Box-->
<div class="container" style="margin-top: 5%;">
	<h5 class="text-center">Info Box </h5>
	<hr>
	<div class="row">
		<div class="col-sm">
			<div class="container">
				<div class="row">
					<div class="col-sm" style="margin: auto;"> <i class="fa fa-globe fa-5x"></i> </div>
					<div class="col-sm-7">
						<h6>Data Valid</h6>
						<p style="font-size: 70%;"> Kapiler memastikan bahwa panti asuhan yang telah bermitra sudah terverifikasi dan valid secara legalitas. Sehingga memberikan rasa aman dan dapat dipertanggungjawabkan.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="container">
				<div class="row">
					<div class="col-sm" style="margin: auto;"> <i class="fa fa-code fa-5x"></i> </div>
					<div class="col-sm-7">
						<h6>Tepat Sasaran</h6>
						<p style="font-size: 70%;">Kapiler menghadirkan daftar kebutuhan yang mendesak yang diperlukan oleh panti asuhan mitra. Sehingga bantuan yang diterima tepat sasaran.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="container">
				<div class="row">
					<div class="col-sm" style="margin: auto;"> <i class="fa fa-file fa-5x"></i> </div>
					<div class="col-sm-7">
						<h6>Mudah Berdonasi</h6>
						<p style="font-size: 70%;">Kapiler memberikan kemudahan bagi seluruh donatur untuk menyampaikan donasinya melalui platform online dan customer service yang responsif.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Consultation Text-->
<div style="background-color:#F0F0F0; padding-bottom:5%;">
	<div class="container pt-3 text-center" style="margin-top: 6%;">
		<h5 class="text-center">Consultation Text</h5>
		<hr>
		<p class="lead">Kapiler membantu menyalurkan kebaikan kepada seluruh panti secara merata
			<br> <a style="font-size: 80%;">Mari ambil bagian dari proyek peradaban ini, saran dan pertanyaan melalui dibawah ini ya </a> </p>
		<div class="col text-center mt-2">
			<button type="button" class="btn btn-lg btn-primary" style="background-color: #fc3c3c;"><i class="fa fa-whatsapp"></i> Consultation Whatsapp</button>
		</div>
	</div>
</div> @endsection @section('script')
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
</script> @endsection
