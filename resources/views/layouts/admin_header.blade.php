<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <title>Admin - {{$title}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    @yield('link')
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark fixed-top flex-md-nowrap p-0 shadow">
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('/admin/dashboard')}}">Admin Dashboard</a>
       <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#" id="logout">Logout</a>
            </li>
       </ul>
      </nav>

      <div class="container">
        <div class="row">
            <div class="col-md-2 bg-light d-none d-md-block sidebar">
                <div class="left-sidebar">
                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="{{url('/admin/panti')}}">Panti</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/admin/program-donasi')}}">Program Donasi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/admin/donatur')}}">Donatur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/input-slider')}}">Slider</a>
                          </li>
                      </ul>

                </div>
            </div>

            @yield('content')
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    @yield('script')
    <script>
    $(document).ready(function(){
        $('#logout').click(function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST',
                url: "{{ route('logout') }}",
                success:function(res){
                    console.log("loading...");
                    window.location.href = "{{ route('home') }}";
                }
            })
        })
    })
    </script>
  </body>
</html>
