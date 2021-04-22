@extends('layouts.guest_header')

@section('content')
<!--Slider-->
<div class="pt-5" style="background-color:#F0F0F0; padding-bottom:1%;">
    <div class="container" style="margin-top: 5%;">
            <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    </ul>
                    <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/images/smiling.jpg')}}" alt="Los Angeles" width="900" height="500">
                        <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/images/smiling2.jpg')}}" alt="Chicago" width="900" height="500">
                        <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev carousel" href="#demo" data-slide="prev">
                      <i class="fa fa-caret-square-o-left" style="color: black; font-size: 150%;"></i>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <i class="fa fa-caret-square-o-right" style="color: black; font-size: 150%;"></i>
                    </a>
    </div>
    </div>
</div>

                <!--Grid 4 items-->
                <div class="container" style="margin-top:2%;">
                        <div class="row text-center">
                          <div class="col-sm">
                            <div class="card" style="width: 15rem;">
                                        <i class="fa fa-instagram fa-5x mx-auto"></i>
                                        <div class="card-body">
                                          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                          <hr>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                </div>
                        </div>

                            <div class="col-sm">
                                <div class="card" style="width: 15rem;">
                                    <i class="fa fa-instagram fa-5x mx-auto"></i>
                                        <div class="card-body">
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                <hr>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-sm">
                                            <div class="card" style="width: 15rem;">
                                                    <i class="fa fa-instagram fa-5x mx-auto"></i>
                                                    <div class="card-body">
                                                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                      <hr>
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                  </div>
                                            </div>


                                            <div class="col-sm">
                                                    <div class="card" style="width: 15rem;">
                                                            <i class="fa fa-instagram fa-5x mx-auto"></i>
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
                            <li data-target="#demoi" data-slide-to="1"></li>
                            </ul>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <div class="container d-flex justify-content-center">
                                            <div class="row">
                                              <div class="col-sm">
                                                    <div class="card" style="width: 18rem;">
                                                            <i class="fa fa-facebook fa-5x mx-auto"></i>
                                                            <div class="card-body">
                                                            <a href="{{url('detail-program-donasi')}}"><h6 class="card-subtitle mb-2 text-muted text-center">Nama Program Donasi</h6></a>
                                                              <hr>
                                                              <p class="card-text">Deskripsi Program Donasi</p>
                                                             <a href="donasi.php"> <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Donasi</button></a>
                                                            </div>
                                                          </div>
                                              </div>
                                              <div class="col-sm">
                                                    <div class="card" style="width: 18rem;">
                                                            <i class="fa fa-facebook fa-5x mx-auto"></i>
                                                            <div class="card-body">
                                                              <h6 class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                                                              <hr>
                                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                              <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                                            </div>
                                                          </div>
                                              </div>
                                              <div class="col-sm">
                                                    <div class="card" style="width: 18rem;">
                                                            <i class="fa fa-facebook fa-5x mx-auto"></i>
                                                            <div class="card-body">
                                                              <h6 class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                                                              <hr>
                                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                              <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                                            </div>
                                                          </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>
                            <!--Grid with slider 2-->
                            <div class="carousel-item">
                                    <div class="container d-flex justify-content-center">
                                            <div class="row">
                                              <div class="col-sm">
                                                    <div class="card" style="width: 18rem;">
                                                            <i class="fa fa-twitter fa-5x mx-auto"></i>
                                                            <div class="card-body">
                                                              <h6 class="card-subtitle mb-2 text-muted text-center">Nama Program Donasi</h6>
                                                              <hr>
                                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                              <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                                            </div>
                                                          </div>
                                              </div>
                                              <div class="col-sm">
                                                    <div class="card" style="width: 18rem;">
                                                            <i class="fa fa-twitter fa-5x mx-auto"></i>
                                                            <div class="card-body">
                                                              <h6 class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                                                              <hr>
                                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                              <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                                            </div>
                                                          </div>
                                              </div>
                                              <div class="col-sm">
                                                    <div class="card" style="width: 18rem;">
                                                            <i class="fa fa-twitter fa-5x mx-auto"></i>
                                                            <div class="card-body">
                                                              <h6 class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                                                              <hr>
                                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                              <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                                            </div>
                                                          </div>
                                                          </div>

                                                        </div>
                                                    </div>


                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#demoi" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" style="margin-right: 50%;"></span>
                            </a>
                            <a class="carousel-control-next" href="#demoi" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark" style="margin-left: 50%;"></span>
                            </a>

            </div>
              <div class="row">
                <div class="col text-center mt-3">
                  <a href="view_program_donasi.php"><button class="btn btn-primary">See More</button></a>
                </div>
              </div>
            </div>

            <!--Grid 6 items-->
            <div style="background-color:#F0F0F0; padding-bottom:1%;">
            <div class="container de-flex justify-content-center" style="margin-top: 7%; ">
                    <h5 class="text-center pt-3">Panti Asuhan Tergabung</h5>
                    <hr>
                    <div class="row de-flex">
                      <div class="col-sm">
                            <div class="card" style="width: auto;">
                                    <i class="fa fa-phone fa-5x mx-auto"></i>
                                    <div class="card-body">
                                      <a href="detail_panti_asuhan.php"><h6 class="card-subtitle mb-2 text-muted">Nama Panti Asuhan</h6></a>
                                      <hr>
                                      <p class="card-text">Detail Panti Asuhan</p>

                                    </div>
                                  </div>
                      </div>
                      <div class="col-sm">
                            <div class="card" style="width: auto;">
                                    <i class="fa fa-phone fa-5x mx-auto"></i>
                                    <div class="card-body">
                                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                      <hr>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                    </div>
                                  </div>
                      </div>
                      <div class="col-sm">
                            <div class="card" style="width: auto;">
                                    <i class="fa fa-phone fa-5x mx-auto"></i>
                                    <div class="card-body">
                                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                      <hr>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                    </div>
                                  </div>
                      </div>
                    </div>
                  </div>
                  <!--New line-->
                  <div class="container de-flex justify-content-center mt-4">
                        <div class="row">
                          <div class="col-sm">
                                <div class="card" style="width: auto;">
                                        <i class="fa fa-phone fa-5x mx-auto"></i>
                                        <div class="card-body">
                                          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                          <hr>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                        </div>
                                      </div>
                          </div>
                          <div class="col-sm">
                                <div class="card" style="width: auto;">
                                        <i class="fa fa-phone fa-5x mx-auto"></i>
                                        <div class="card-body">
                                          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                          <hr>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                        </div>
                                      </div>
                          </div>
                          <div class="col-sm">
                                <div class="card" style="width: auto;">
                                        <i class="fa fa-phone fa-5x mx-auto"></i>
                                        <div class="card-body">
                                          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                          <hr>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <button type="button" class="btn btn-primary btn-lg btn-block btn-dark">Button</button>
                                        </div>
                                      </div>
                          </div>
                        </div>
                        <div class="row">
                                <div class="col text-center mt-2">
                                  <a href="view_panti_asuhan.php"><button class="btn btn-primary">See More</button></a>
                                </div>
                              </div>
                      </div>
                </div>


                <!--Info Box-->

                <div class="container" style="margin-top: 5%;">
                  <h5 class="text-center">Info Box </h5>
                  <hr>
                  <div class="row">
                    <div class="col-sm">

                      <div class="container">
                        <div class="row">
                          <div class="col-sm" style="margin: auto;">
                            <i class="fa fa-globe fa-5x"></i>
                          </div>
                          <div class="col-sm-7">
                              <h6>Data Valid</h6>
                           <p style="font-size: 70%;"> Kapiler memastikan bahwa panti
                            asuhan yang telah bermitra sudah terverifikasi dan valid secara legalitas.
                            Sehingga memberikan rasa aman dan dapat dipertanggungjawabkan.</p>
                          </div>
                        </div>
                      </div>

                    </div>


                    <div class="col-sm">

                      <div class="container">
                        <div class="row">
                          <div class="col-sm" style="margin: auto;">
                            <i class="fa fa-code fa-5x"></i>
                          </div>
                          <div class="col-sm-7">
                              <h6>Tepat Sasaran</h6>
                            <p style="font-size: 70%;">Kapiler menghadirkan daftar kebutuhan yang mendesak
                            yang diperlukan oleh panti asuhan mitra. Sehingga bantuan
                            yang diterima tepat sasaran.</p>
                          </div>
                        </div>
                      </div>

                    </div>


                    <div class="col-sm">

                        <div class="container">
                            <div class="row">
                              <div class="col-sm" style="margin: auto;">
                                <i class="fa fa-file fa-5x"></i>
                              </div>
                              <div class="col-sm-7">
                                  <h6>Mudah Berdonasi</h6>
                                <p style="font-size: 70%;">Kapiler memberikan kemudahan
                                  bagi seluruh donatur untuk menyampaikan donasinya melalui
                                  platform online dan customer service yang responsif.</p>
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
                  <p class="lead">Kapiler membantu menyalurkan kebaikan kepada seluruh panti secara merata <br>
                   <a style="font-size: 80%;">Mari ambil bagian dari proyek peradaban ini, saran dan pertanyaan melalui dibawah ini ya </a>
                  </p>
                  <div class="col text-center mt-2">
                      <button type="button" class="btn btn-lg btn-primary" href="#"><i class="fa fa-whatsapp"></i> Consultation Whatsapp</button>
                    </div>

                  </div>

              </div>
@endsection

@section('script')
<script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
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
@endsection
