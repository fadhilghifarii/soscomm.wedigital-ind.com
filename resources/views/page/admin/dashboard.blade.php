<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">

    <title>Dashboard</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark fixed-top flex-md-nowrap p-0 shadow">
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dasboard.php">Admin Dashboard</a>
       <ul class="navbar-nav px-3">
           <li class="nav-item text-nowrap">
               <a class="nav-link" href="#">Logout</a>
           </li>
       </ul>
      </nav>

      <div class="container">
        <div class="row">
            <div class="col-md-2 bg-light d-none d-md-block sidebar">
                <div class="left-sidebar">
                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="panti.php">Panti</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="program_donasi.php">Program Donasi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="donatur.php">Donatur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="input_slider.php">Slider</a>
                          </li>
                      </ul>

                </div>
            </div>

            @can('logged-in')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h3 class="mt-5">Welcome Admin !!</h3>
                <hr>
            </main>
            @endcan
        </div>

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
