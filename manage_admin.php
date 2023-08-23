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
      
      @media (max-width: 600px) {
        .working-with-me h3 {
          font-size: 16px !important;
        }
        .col-md-3{
          width: 100%;
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

      <!-- Dashboard -->
      <div class="row container bg-white mt-2 me-auto" style="margin: auto;">

        <div class="container-fluid col-md-10 mt-2 me-auto" >
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg" style="background-color: #0A2558;">
              <div class="container " >
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

          <div class="row container mt-4" style="margin-bottom: 25px;">
            <!-- Col_1 -->
            <?php 
            include"config.php";
            include"function.php";
            include "album_delete.php";
            ?>
            <h3 class="mt-2">Manage Other Posts</h3>

            <?php 
            $sql = "SELECT * FROM vinyls ORDER BY v_id DESC ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {



               ?>
               <div class="col-md-3 mt-2">
                <div class="card mt-2">
                  <img src="<?php echo $row['v_image'] ?>" class="card-img-top" alt="..." style="height: 200px;" id="<?php echo $row['v_id']?>">
                  <div class="card-bordy text-white working-with-me" style="text-align: center; background-color: #0A2558;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item" style="height: 45px;">&nbsp;&nbsp;<?php echo $row['v_album'] ?></li>
                      <li class="list-group-item"style="height: 45px;">&nbsp;&nbsp;<?php echo $row['v_artist'] ?></li> 
                      <li class="list-group-item"><a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['v_id']; ?>">Delete</a></li> 

                    </ul> 
                  </div>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?php echo $row['v_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure, you want to delete this item?
                    </div>
                    <div class="modal-footer">
                      <a href="?delpost=<?php echo $row['v_id']; ?>" class="btn btn-success"  type="button">Yes</a>
                      <a href="post_manage.php" class="btn btn-danger"  type="button">No</a>
                    </div>
                  </div>
                </div>
              </div>  
              <!-- Modal -->
              <?php 
            }
          }
          ?>

          
           <?php  
           $msguser='';
           if (isset($_GET['del'])) {
            $user_id=$_GET['del'];        
            $sqldel="SELECT * FROM user WHERE user_id='$user_id'";
            $resultdel=mysqli_query($conn,$sqldel);
            if (mysqli_num_rows($resultdel)>0) 
            {
              while ($rowdel=mysqli_fetch_assoc($resultdel)) 
              {

                mysqli_query($conn,"DELETE FROM user WHERE user_id='$user_id'");
                $msguser="<div class='alert alert-success'>Success Deleting</div>";                 
              }

            }else{
              $msguser="<div class='alert alert-warning'>Something Wrong !!</div>";

            }
          }
          ?>
       
          
            
          
          
        

        <?php if (!isset($_GET['edit'])) {

          ?>
          <div class="vinylview mt-4">
            <div class="row">
              <div class="col-md-10">
                <h3 >Manage Accounts</h3>            
              </div>
            </div>
          </div>


          <?php 
          error_reporting(0);
          echo $msguser;
          ?>

          <!-- <div class="row me-auto"> -->
          <div class="table-responsive mt-3">
            <?php 
             ?>

             <!-- User Account -->
             <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">UserName</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone No</th>
                  <th scope="col">User Level</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                 $sql_2 = "SELECT * FROM user";
                $result_2 = mysqli_query($conn, $sql_2);
                 if (mysqli_num_rows($result_2) > 0) {
                $i = 1;
                while ($row_2 = mysqli_fetch_assoc($result_2)) {
                  ?>
                  <tr>
                    <input type="hidden" name="hidden" value="<?php echo $row_2['user_id']; ?>">
                    <td><?php echo $i; $i++; ?></td>
                    <td><?php echo $row_2['username']; ?></td>
                    <td><?php echo $row_2['email']; ?></td>
                    <td><?php echo $row_2['user_address']; ?></td>
                    <td><?php echo $row_2['user_phone']; ?></td>
                    <td><?php echo $row_2['user_level']; ?></td>
                    <td>
                      <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row_2['user_id']; ?>">Delete</a>
                    </td> 
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal<?php echo $row_2['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure, you want to delete this item?
                        </div>
                        <div class="modal-footer">
                          <a href="?del=<?php echo $row_2['user_id']; ?>" class="btn btn-success"  type="button">Yes</a>
                          <a href="viewuser.php" class="btn btn-danger"  type="button">No</a>             

                        </div>
                      </div>
                    </div>
                  </div>  
                  <!-- Modal -->
                  <?php
                }
                ?>
              </tbody>
            </table>
            <!-- End of User Accounts -->
          <?php } ?>
        </div>
        <!-- </div> -->
        
        
      </div>              
    </div>
  <?php } ?>
</div>

<!-- End of Dash -->


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