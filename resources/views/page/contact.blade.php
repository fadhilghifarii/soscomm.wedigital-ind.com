@extends('layouts.guest_header')
@section('content')

    <div class="container mb-5" style="margin-top: 7%;">
            <div class="card shadow-sm">

                    <div class="card-body">
                            <h4 class="text-center">Contact Us </h4>
                            <hr>
                            <form>
                                <div class="form-row">
                                  <div class="col">
                                      Nama
                                    <input type="text" class="form-control" placeholder="Nama">
                                  </div>
                                  <div class="col">
                                      Email
                                    <input type="text" class="form-control" placeholder="Email">
                                  </div>
                                </div>
                                <div class="form-row">
                                <div class="col">
                                        Pesan
                                      <textarea type="textarea" class="form-control" placeholder="Pesan"></textarea>
                                    </div>

                                </div>
                                <div class="form-row">
                                        <div class="col mt-2">
                                <button type="button" class="btn btn-sm btn-primary" href="#">Kirim Pesan</button>
                               </div>
                            </div>


                              </form>

                    </div>


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
