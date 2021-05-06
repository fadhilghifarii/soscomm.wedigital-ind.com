@extends('layouts.guest_header')
@section('content')
<div class="container" style="margin-top: 7%;">
   <div class="card shadow-sm">
      <div class="card-body">
         <h4 class="text-center">{{$a->judul}}</h4>
         <hr>
         <div style="display:flex;justify-content:center;">
            <img src="{{asset('assets/images/article/'.$a->foto)}}" class="img-fluid mb-2" alt="Responsive image">
         </div>
         {!! $a->deskripsi !!}
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
