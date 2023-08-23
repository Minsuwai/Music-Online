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
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header bg-dark">
            <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel" style="text-transform: uppercase;">Music Online</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body bg-dark">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a href="login.php">
                  <i class="fa-solid fa-right-to-bracket"></i>
                  <span class="link-name">
                    Login
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="register.php">
                  <i class="fa-solid fa-user-plus"></i>
                  <span class="link-name">
                    Register
                  </span>
                </a>
              </li>              
            </ul>
          </div>
        </div> 
      </div>
    </nav>
    <!-- End of Nav -->

    <!-- PHP -->
    <?php 
    include"config.php";
    ?>
    <?php 
    include "function.php";

    if (isset($_POST['register'])) {

      $username = sanitize(mysqli_real_escape_string($conn, $_POST['username'])); 

      $email = sanitize(mysqli_real_escape_string($conn, $_POST['email']));

      $user_password = sanitize(mysqli_real_escape_string($conn, $_POST['user_password']));

      $user_address = sanitize(mysqli_real_escape_string($conn, $_POST['user_address']));

      $user_phone = sanitize(mysqli_real_escape_string($conn, $_POST['user_phone']));

      
      

      if ($username == '' || $email == '' || $user_password == '' || $user_phone == '' || $user_address == '' ) 
      {            
        $msg = "<div class='alert alert-warning'> Please Fill your data </div>";
      }

      else
      {
        $num_row_1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' "));

        if ($num_row_1 > 0) {
          $msg = "<div class='alert alert-warning'> This email is already existed.</div>";
        }
        else{
          mysqli_query($conn, "INSERT INTO user (username, email, user_password, user_address, user_phone, user_level) values ('$username', '$email', md5('$user_password'), '$user_address', '$user_phone',1)");

          header("Location:login.php");
        }
      }
    }
    ?>
    <!-- End of PHP -->

    <!-- Register Form -->
    <div class="container col-md-7">
      <div class="row">       
        <div class="container-fluid col-md-12">
          <section class="form my-4 ">
            <div class="container">
              <div class="row login_row no-gutters ">
                <div class="col-lg-5">
                  <img src="images/pass.jpg" class="img-fluid login_img" alt="">
                </div>
                <div class="col-lg-7">
                  <h1 class="font-weight-bold py-3">Music Online</h1>
                  <h4>Register your account</h4>
                  <?php 
                  error_reporting(0);echo $msg;
                  ?>
                  <form action="" method="post">
                    <div class="form-row">
                      <div class="col-lg-7">
                        <input type="text" name="username" value="<?php echo $_POST['username'] ?>" placeholder="Username" class="form-control">
                      </div>
                    </div>
                    <div class="form-row mt-2">
                      <div class="col-lg-7">
                        <input type="email" name="email" value="<?php echo $_POST['email'] ?>" placeholder="Email-Address" class="form-control">
                      </div>
                    </div>
                    <div class="form-row mt-2">
                      <div class="col-lg-7">
                        <input type="password" name="user_password" placeholder="Enter password" class="form-control">
                      </div>
                    </div>
                      <!-- <div class="form-row mt-2">
                        <div class="col-lg-7">
                          <input type="password" name="user_repassword" placeholder="Repeat password" class="form-control">
                        </div>
                      </div> -->
                      
                      <div class="form-row mt-2">
                        <div class="col-lg-7">
                          <input type="text" name="user_address" value="<?php echo $_POST['user_address'] ?>" placeholder="Address" class="form-control">
                        </div>
                      </div>
                      <div class="form-row mt-2">
                        <div class="col-lg-7">
                          <input type="text" name="user_phone" value="<?php echo $_POST['user_phone'] ?>" placeholder="Phone no." class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-row mt-4 ">
                        <div class="col-lg-7" style="margin: auto;">
                          <button type="submit" class="btn btn-outline-primary mb-4" name="register">Register</button>
                        </div>
                      </div>

                      <a href="#" class="text-primary login_btn">Forgot Password?</a>
                      <p style="color: dark;">Already have an account? <a href="login.php" class="text-primary login_btn">Login</a></p>
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