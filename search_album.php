<?php
  include "function.php";
  include "config.php";
?>

<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" >

    <title>Music Online</title>
    <style>
      /*Side bar nav*/
      .offcanvas-body .navbar-nav{
        margin-top: 16px;
      }

      .offcanvas-body .navbar-nav li{
        height: 50px; 
        width: 100%;
        list-style: none;
      }

      .offcanvas-body .navbar-nav li a{

        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
      }

      .offcanvas-body .navbar-nav li a i{

        min-width: 60px;
        text-align: center;
        color: #fff;
        font-size: 18px;
      }
      .offcanvas-body .navbar-nav li a:hover{
        background: #081D45;
      }

      .offcanvas-body .navbar-nav li a .link-name{

        font-size: 15px;
        font-weight: 400;
      }
      @media (max-width: 900px) {
      .working-with-me h3 {
        font-size: 26px;
      }
      .working-with-me ul {
        font-size:  12px;
      }
      .col-md-3{
          width: 50%;
        }
    }
    @media (max-width: 768px) {
      .working-with-me h3 {
        font-size: 20px !important;
      }
      .working-with-me ul {
        font-size:  10px !important;
      }
    }
      
      @media (max-width: 600px) {
        .working-with-me h3 {
          font-size: 16px !important;
        }
        .col-md-3{
          width: 100%;
        }
      }
        
        @media (max-width: 400px) {
          #services-content-working h1 {
            font-size: 20px;
          }
          .working-with-me {
            width: 90%;
          }
          .working-with-me h3 {
            font-size: 10px !important;
          }
          .col-md-3{
          width: 100%;
        }
      }
    </style>

    
  </head>
  <body>
    <div class="bg-img">
      <!-- Nav -->
      <nav class="navbar navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="font-size: 30px;">Music Online</a>
        <div class=" col-md-6 me-auto ">
          <a class="navbar-menu" href="index.php">Home</a>
          <a class="navbar-menu" href="#about">About</a>
          <a class="navbar-menu" href="#move_foot">Contacts</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span>
            <i class="fa-solid fa-user text-white" style="font-size: 25px;"></i>      
          </span>             
        </button>
        <?php 
        include"right_bar.php";
        ?>
      </div>
    </nav>
      <!-- End of Nav -->

      <!-- Content -->

      <div class="container col-md-11 mt-6 navbar-brand" style="margin-top: 25px;">
      <div class="text-primary text-uppercase" >
        <h1 class="fw-bold"> Listen To Music <br>
          And Enjoy What <br> You Love  </h1>
        </div>
      </div> 
        
        
        <!-- Search -->
        <div class="container-fluid  me-auto mt-4">
          <!-- Search -->
      <div class="container-fluid col-md-5 me-auto mt-4">
        <div class="row">
          <!-- <nav class="navbar bg-info bg-opacity-90 mt-4"> -->
            <div class="container-fluid">
              <form class="d-flex" role="search" method="post" action="search_album.php">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="textsearch" value="<?php echo $_POST['textsearch'] ?>" >
                <button class="btn btn-outline-success" type="submit" name="search">Search</button>
              </form>
            </div>
          </div>
        </div>
        <!-- End of Search -->
           <!-- search album -->
              <?php include "search_view.php" ?>
           <!-- End of search album -->
        </div>
        <!-- End of Search -->
        
       

        <!-- List of Songs -->


            


            <!-- footer -->
            <footer class="bg-dark text-white pt-5 pb-4 mt-3" id="move_foot">
              <div class="container text-justify text-md-left">
                <div class="row text-justify text-md-left">
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">


                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Company Name</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. 
                    </p>
                  </div>

                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Product</h5>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">The Providers</a>
                    </p>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">Creativity</a>
                    </p>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">Sourcefiles</a>
                    </p>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">The Providers</a>
                    </p>
                  </div>

                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Useful links</h5>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">Your Account</a>
                    </p>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">Become an Affiliates</a>
                    </p>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">Shipping Rates</a>
                    </p>
                    <p>
                      <a href="#" class="text-white" style="text-decoration: none;">Help</a>
                    </p>
                  </div>

                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                      <i class="fas fa-house mr-3"></i> Yangon, St 315, Myanmar
                    </p>
                    <p>
                      <i class="fas fa-envelope mr-3"></i> musiconline@gmail.com
                    </p>
                    <p>
                      <i class="fas fa-phone mr-3"></i> +95 987 785 279
                    </p>
                  </div>

                </div>
                <hr class="mb-4">
                <div class="row align-items-center">
                  <div class="col-md-7 col-lg-8">
                    <p> Copyright &copy; All rights reserved by: 
                      <a href="#" style="text-decoration: none;">
                        <strong class="text-warning">Min Su Wai</strong>
                      </a></p>
                    </div>
                    <div class="col-md-5 col-lg-4">
                      <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                              <i class="fa-brands fa-square-facebook"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                              <i class="fa-brands fa-twitter"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                              <i class="fa-brands fa-google-plus-g"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                              <i class="fa-brands fa-linkedin"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                              <i class="fa-brands fa-youtube"></i>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
              <!-- End of Footer -->
            </div>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



          </body>
          </html>