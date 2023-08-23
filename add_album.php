<!-- PHP -->
<?php 
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

    
    <?php 
    include "function.php";
    if (isset($_POST['add'])) {
      $artist = sanitize(mysqli_real_escape_string($conn, $_POST['artist']));

      $album = sanitize(mysqli_real_escape_string($conn, $_POST['album']));

      $year = sanitize(mysqli_real_escape_string($conn, $_POST['year']));

      $genre = sanitize(mysqli_real_escape_string($conn, $_POST['genre']));

      $price = sanitize(mysqli_real_escape_string($conn, $_POST['price']));

      $user_id=$_SESSION['uid'];

      $date = date('Y-m-d');

      if ($artist == '' || $album == '' || $year == '' || $genre == '' || $price == '') {
        $msg = "<div class='alert alert-warning'>Please Fill your data</div>";
      }
      else{
        include "image_upload.php";

            // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        }
            // if everything is ok, try to upload file
        else{
          move_uploaded_file($_FILES["albumcover"] ["tmp_name"], $target_file);

          mysqli_query($conn, "INSERT INTO vinyls (v_artist, v_album, v_releasedate, v_genre, v_price, v_userid, v_image) values ('$artist', '$album', '$year', '$genre', '$price', '$user_id', '$target_file')");

          $msg = "<div class='alert alert-success'>Success</div>";
        }
      }
    }
    ?>
    <!-- End of PHP -->

    <!-- Dashboard -->     
    <div class="row container bg-white mt-2 me-auto" style="margin: auto; opacity: 95%;">    

      <div class="container-fluid col-md-10 mt-2 me-auto">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg" style="background-color: #0A2558;">
            <div class="container-fluid " >
              <i class="fa-solid fa-bars text-white">
              </i>
              <h5 class="text-white">Dashboard</h5> 
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>           
            </div>
          </nav>
        </div>
        <div class="row mt-4"  style="margin-bottom: 15px;">
          <?php error_reporting(0); echo $msg; ?>
          <form class="col-md-8 bg-secondary p-4 m-auto" method="post" action="" enctype="multipart/form-data">
            <div class="form-row">
            <div class="mb-3 input-group">
              <span class="p-2" style="background-color: skyblue;">
                <i class="fa-solid fa-palette"></i>
              </span>
              <input type="text" class="form-control"  placeholder="Artist" name="artist" value="<?php echo $_POST['artist'] ?>" autocomplete="off">
            </div>
            <div class="mb-3 input-group">
              <span class="p-2" style="background-color: skyblue;">
                <i class="fa-solid fa-image"></i>
              </span>
              <input type="text" class="form-control" placeholder="Album" name="album" value="<?php echo $_POST['album'] ?>" autocomplete = "off">
            </div>

            <div class="mb-3 input-group">
              <span class="p-2" style="background-color: skyblue;">
                <i class="fa-solid fa-calendar-days"></i>
              </span>
              <input type="text" class="form-control" placeholder="Release Year" name="year" value="<?php echo $_POST['year'] ?>" autocomplete = "off">
            </div>

            <div class="mb-3 input-group">
              <span class="p-2" style="background-color: skyblue;">
                <i class="fa-solid fa-music"></i>
              </span>
              <input type="text" class="form-control" placeholder="Genre" name="genre" value="<?php echo $_POST['genre'] ?>" autocomplete = "off">
            </div>

            <div class="mb-3 input-group">
              <span class="p-2" style="background-color: skyblue;">
                <i class="fa-solid fa-sack-dollar"></i>
              </span>
              <input type="text" class="form-control" placeholder="Price" name="price" value="<?php echo $_POST['price'] ?>" autocomplete = "off">
            </div>

            <div class="mb-3 input-group">             
              <input class="form-control" type="file" id="formFile" name="albumcover">
            </div>

            <div class="container" style="text-align: center;">
              <button type="submit" class="btn btn-primary" name="add">Submit</button>
            </div>
            </div>
          </form>                       
        </div>                          
      </div>
    </div>  

    <!-- End of Dashboard -->


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
          <div class="col-md-7 col-lg-8 text-center">
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