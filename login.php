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
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      section{


      }

      .login_row{
        background: white;
        border-radius: 30px;

      }
      .login_img{
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
      }

      .login_btn:hover{
        text-decoration: underline;
      }

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
    </style>

    
  </head>
  <body>
    <div class="bg-img">
      <!-- Nav -->
      <nav class="navbar navbar-dark bg-dark ">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="font-size: 30px;">Music Online</a>
          <div class="col-md-6 me-auto ">
            <a class="navbar-menu" href="index.php">Home</a>
            <a class="navbar-menu" href="#">About</a>
            <a class="navbar-menu" href="#move_foot">Contacts</a>
          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span>
              <i class="fa-solid fa-user text-white" style="font-size: 25px;"></i>      
            </span>             
          </button>
        <?php include"right_bar.php"; ?>
        </div>
      </nav>
      <!-- End of Nav -->

      <!-- PHP -->
      

      <?php 
      $atmp=0;
      include"function.php";

      if (isset($_POST['login'])) {
        $email = sanitize(mysqli_real_escape_string($conn, $_POST['email']));

        $password = sanitize(mysqli_real_escape_string($conn, $_POST['password']));

        $atmp = $_POST['hidden'];

        if ($email == '' || $password == '') {
          $msg = "<div class='alert alert-warning'>Please Fill Data</div>";
        }
        else{
          if ($atmp<5) {
            $sql = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND user_password=md5('$password')");

            $num_row = mysqli_num_rows($sql);

            if ($num_row>0) {

              $_SESSION['email'] = $email;
              $reg_email = $_SESSION['email'];

              $sql_array = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE email = '$reg_email'"));
              $_SESSION['uid'] = $sql_array['user_id'];
              if ($sql_array['user_level'] == 9) {
                header("Location:admin_dashboard.php");
              }
              elseif ($sql_array['user_level'] == 1) {
                header("Location:user_dashboard.php");
              }
              
            }
            else{
              $atmp++;
              $msg = "<div class='alert alert-warning'>Wrong Email and Password and the number of attempt is".$atmp."</div>";
            }
          }

          if ($atmp == 5) {
            $msg = "<div class='alert alert-danger'>Login Limited Exceed</div>";
          }
        }
      }
      ?>
      <!-- End of PHP -->

      <!-- Login Form -->
      <div class="container col-md-7 login">
        <div class="row login">
          <div class="container-fluid col-md-12 login">         
            <section class="form my-4 ">
              <div class="container login">
                <div class="row login_row no-gutters login">
                  <div class="col-lg-5 login">
                    <img src="images/pass.jpg" class="img-fluid login_img" alt="">
                  </div>
                  <div class="col-lg-7 login">
                    <h1 class="font-weight-bold py-3">Music Online</h1>
                    <h4>Sign into your account</h4>
                    <?php 
                      error_reporting(0); echo $msg;
                     ?>
                    <form method="post" action="">
                      <div class="form-row">
                        <div class="col-lg-7">
                          <input type="hidden" class="form-control" name="hidden" value="<?php echo $atmp; ?>">
                          <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $_POST['email'] ?>" <?php
                            if ($atmp == 5) {?>
                              disabled = 'disabled' <?php 
                            } ?> autocomplete = "off">
                        </div>
                      </div>
                      <div class="form-row mt-2">
                        <div class="col-lg-7">
                          <input type="password" name="password" placeholder="********" class="form-control" value="<?php echo $_POST['passwrod'] ?>" <?php if ($atmp == 5) { ?> disabled = 'disabled' <?php } ?> autocomplete = "off">
                        </div>
                      </div>
                      <div class="form-row mt-2">
                        <div class="col-lg-7" style="margin: auto;">
                          <button type="submit" class="btn btn-outline-primary mb-4" name="login" <?php if ($atmp == 5) {?> disabled = 'disabled' <?php } ?>>Login</button>
                        </div>
                      </div>

                      <a href="#" class="text-primary login_btn">Forgot Password?</a>
                      <p style="color: dark;">Don't have an account? <a href="register.php" class="text-primary login_btn">Register here</a></p>
                    </form>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>


      <!-- End of Login Form -->

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