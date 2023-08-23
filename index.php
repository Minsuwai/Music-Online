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
                <a class="navbar-menu" href="about.php">About</a>
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
            <div class="container-fluid col-md-5 me-auto mt-4">
              <div class="row">                
                  <div class="container-fluid">
                    <form class="d-flex" role="search" method="post" action="search_album.php">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="textsearch" value="<?php echo $_POST['textsearch'] ?>" >
                      <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End of Search -->

              <!-- List of Songs -->
              <!-- Dashboard --> 
              <div class="row container mt-2 me-auto" style="margin: auto;  margin-bottom: 25px;">
                <div class="container-fluid  mt-2 me-auto">
                  <div class="row container-fluid mt-2" style="margin-bottom: 25px;">
                    <?php 
                    include"config.php";
                    ?>
                    <h3 class="mt-2 text-white">Let's Explore With Us</h3>                    
                    <?php 
                    $sql = "SELECT * FROM vinyls ORDER BY v_id DESC LIMIT 12 ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                       ?>
                       <div class="col-md-3  mt-2">
                        <div class="card mt-2">
                          <img src="<?php echo $row['v_image'] ?>" class="card-img-top" alt="..." style="height: 200px;" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $row['v_id']; ?>" >
                          <div class="card-bordy text-white" style="text-align: center; background-color: #0A2558;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"  style="height: 40px;">&nbsp;&nbsp;<?php echo $row['v_album'] ?></li>
                              <li class="list-group-item"  style="height: 40px;">&nbsp;&nbsp;<?php echo $row['v_artist'] ?></li>  
                            </ul> 
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" style="height: 700px" id="detailModal<?php echo $row['v_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Album Detail</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body" >
                                <div class="card m-auto" style="width: 21rem;">
                                  <img src="<?php echo $row['v_image'] ?>" class="card-img-top" alt="...">
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Album Name: <?php echo $row['v_album'] ?></li>
                                    <li class="list-group-item">Artist Name: <?php echo $row['v_artist'] ?></li>
                                    <li class="list-group-item">Release Date: <?php echo $row['v_releasedate'] ?></li>
                                    <li class="list-group-item">Genre: <?php echo $row['v_genre'] ?></li>
                                    <li class="list-group-item">Price: <?php echo $row['v_price'] ?></li>
                                  </ul>
                                </div>
                              </div>                                
                            </div>
                          </div>
                        </div>  
                        <!-- Modal --> 
                      </div>
                      <?php } }
                  ?>
                </div>              
              </div>
            </div>  
            <!-- End of Dashboard -->
            <!-- End of List of Songs -->


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