<?php 
include"config.php";
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
      
      @media (max-width: 600px) {
        .working-with-me h3 {
          font-size: 16px !important;
        }
        .col-md-3{
          width: 100%;
        }

        .working-with-me ul {
          font-size:  8px !important;
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

          .working-with-me ul {
            font-size:  6px !important;
          }

        }

        html, body{
          overflow-x: hidden;
          font-family: "Open sans", sans-serif;
          color: #000000;
          text-decoration: none;
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
              <a class="navbar-menu" href="contacts_us.php">Contacts</a>
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
        
        <div class="container col-md-9 ">
          <div class="row ">
            <div class="container-fluid col-md-12 text-white me-auto">  

              <section class="form my-4 ">
                  <div>
                    <header class="text-center" style="
                    padding: 20px;
                    text-align: center;">
                    <h1>About Us</h1>
                  </header>
                  <img src="images/aboutUs.jpg" class="img-fluid rounded-6" alt="" style="opacity: 90%;">
                </div>
                <div class="text-white text-center mt-4">

                  <h2>Our Company</h2>
                  <div class="text-white text-center mt-4">
                    <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <section style="padding: 20px;">
                      <h2>Our Team</h2>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          John Doe - CEO
                        </li>
                        <li class="nav-item">
                          Jane Smith - CTO
                        </li>
                        <li class="nav-item">
                          Bob Johnson - CFO
                        </li>

                      </ul>
                    </section>
                    <section style="padding: 20px;">
                      <h2>Contact Us</h2>
                      <p>Email: info@ourcompany.com</p>
                      <p>Phone: 555-555-5555</p>
                    </section>
                  </div>
                  
                </div>
                <!-- </div>
                </div> -->
              </section>
            </div>
          </div>
        </div>

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




        <script src="js/bootstrap.bundle.min.js"></script>



      </body>
      </html>