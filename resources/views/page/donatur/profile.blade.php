<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="" rel="icon">
    <title>NAME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">


  <style>
        #myBtn {
                display: none;
                position: fixed;
                bottom: 4%;
                right: 15px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: black;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
              }
              #myBtn2 {
                position: fixed;
                bottom: 13%;
                right: 15px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: black;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
              }

        #myBtn:hover {
                background-color: #555;
              }
        </style>
    

    
</head>
<body class="bg-light">
    <button id="myBtn2"><i class="fa fa-whatsapp"></i></button>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>

    <nav class="navbar navbar-expand-md bg-light shadow-sm p-3 mb-5 bg-white fixed-top">
            <a href="#" class="navbar-brand text-dark">LOGO</a>
            <button type="button" class="navbar-toggler navbar-light" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon navbar-light"></span>
            </button>
        
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    
                </div>
                <div class="navbar-nav text-dark">
                    <a href="index.php" class="nav-item nav-link active text-dark">Home</a>
                    <a href="contact.php" class="nav-item nav-link text-dark">Contact Us</a>
                    <a href="about.php" class="nav-item nav-link text-dark">About Us</a>
                    <div class="nav-item dropdown text-dark">
                        <a href="#" class="nav-link dropdown-toggle text-dark" data-toggle="dropdown">Messages</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Inbox</a>
                            <a href="#" class="dropdown-item">Sent</a>
                            <a href="#" class="dropdown-item">Drafts</a>
                        </div>
                    </div>
                    <a href="login/login.php" class="nav-item nav-link text-dark">Login</a>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                            </div>
                            <h5 class="user-name">Username</h5>
                            <h6 class="user-email">Email@email.com</h6>
                        </div>
                        <div class="about">
                            <h5>About</h5>
                            <p>Deskripsi Tentang User</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-4">
                            <div class="form-group">
                                <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">History Donasi</h6>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Panti</th>
                            <th scope="col">Program Donasi Panti Asuhan</th>
                            <th scope="col">Nominal Donasi</th>
                            <th scope="col">Action</th>
    
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>...</td>
                            <td>...</td>
                            <td>
                                <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Delete</button></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>...</td>
                            <td>...</td>
                            <td>
                                <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Delete</button></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Jhon</td>
                            <td>...</td>
                            <td>...</td>
                            <td>
                                <a href="#"> <button type="button" class="btn btn-primary btn-sm mb-3">Delete</button></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            </div>
            </div>
            </div>

           


            <!--Footer-->
    
                <footer class="bg-dark text-white mt-5">
                        <div class="container pt-2">
                                <div class="row">
                                  <div class="col-sm">
                                      <h4 style="margin-top:2%;">Berdayakan Panti Bersama Kapiler Indonesia! <br>_______</h4> 
                                       <p>Kapiler Indonesia adalah sebuah platform online 
                                            yang bergerak dalam pemetaan dan pemberdayaan panti 
                                            asuhan seluruh indonesia</p>
                                        <p>Digital Innovation Lounge, Jln Karya Pemuda no.2, Beji Timur, Kecamatan Beji, Kota Depok 16422</p>
                                  </div>
                                  <div class="col-sm">
                                        <h4 style="margin-top:2%;">Media Sosial !<br>_______</h4>
                                        <i class="fa fa-instagram"></i> Intagram <br>
                                        <i class="fa fa-facebook"></i> Facebook <br>
                                        <i class="fa fa-twitter"></i> Twitter <br>

                                        

                                  </div>
                                  <div class="col-sm">
                                        <h4 style="margin-top:2%;">Hubungi Kami<br>_______</h4>
                                        <i class="fa fa-phone"></i> 0891234567 - Fadhil <br>
                                        <i class="fa fa-phone"></i> 0812340987 - Hanan <br>

                                  </div>
                                  <div class="col-sm">
                                        <h4 style="margin-top:2%;">Download Aplikasi<br>_______</h4>
                                        <img class="img-thumbnail" src="../googleplay.png">

                                      </div>
                                </div>
                              </div>
                     
                        <!-- Copyright -->
                        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2020 Copyright
                        <a class="text-white" href="#">Company Name</a>
                        </div>
                        <!-- Copyright -->
                </footer>


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

    
</body>
</html>