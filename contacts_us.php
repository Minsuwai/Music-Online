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
        
        <div class="container col-md-9 ">
          <div class="row ">
            <div class="container-fluid col-md-12 text-white me-auto">  
              <div>
                <header class="text-center" style="
                padding: 20px;
                text-align: center;">
                <h1>Contacts Us</h1>
              </header>

            </div>
            <section>
              
              <div class="mb-3 col-lg-7" style="margin: auto;">
                <h2>Get in Touch</h2>
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="your name">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3 col-lg-7" style="margin: auto;">
                <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button class="btn mt-2 btn-primary">Submit</button>
              </div>
              
            </section>
            <section class="text-center">
              <h2>Visit Us</h2>
              <p>123 Main St.</p>
              <p>Anytown, USA</p>
            </section>
            <section class="text-center">
              <h2>Call Us</h2>
              <p>Phone: 555-555-5555</p>
              <p>Fax: 555-555-5556</p>
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