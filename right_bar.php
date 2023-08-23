<?php 
include"config.php";
?>
<?php 
session_start();
?>
<link href="css/style.css" rel="stylesheet" >
<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
  <div class="offcanvas-header bg-dark">
    <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel" style="text-transform: uppercase;">Music Online</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-dark">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <?php 
              //$email=$_SESSION["email"]; 
               //echo $email;?>
               <?php 
               error_reporting(0);
               if ($_SESSION['email']=='') {                        
                 ?> 
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
              <?php } else{ 
                $email=$_SESSION['email'];
                $user_array=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user WHERE email='$email'"));
                $user_id=$user_array['user_id'];
                $user_level=$user_array['user_level'];
                $user_name=$user_array['username'];

                ?>
                <li class="nav-item">
                  <a href="#">
                    
                    <span class="link-name" style="text-transform: uppercase; color: whitesmoke;">
                      <i class="fa-solid fa-user"></i>
                      Welcome <?php echo $user_name; ?>
                    </span>
                  </a>
                </li>   
                
                
              <?php } ?>         
            </ul>
            <?php 
            if ($user_level == '1') {
             ?>
             <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a href="user_dashboard.php">
                  <i class="fa-brands fa-slack"></i>
                  <span class="link-name">
                    Dashboard
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_album.php">
                  <i class="fa-solid fa-inbox"></i>
                  <span class="link-name">
                    Add Album
                  </span>
                </a>
              </li>
              <li>
                <a href="post_manage.php">
                  <i class="fa-solid fa-pen-nib"></i>
                  <span class="link-name">
                    Update
                  </span>
                </a>
              </li>
              <li>
                <a href="post_manage.php">
                  <i class="fa-solid fa-trash"></i>
                  <span class="link-name">
                    Delete
                  </span>
                </a>
              </li>
              <li>
                <a href="profile.php">
                  <i class="fa-solid fa-address-card"></i>
                  <span class="link-name">
                    Profile
                  </span>
                </a>
              </li>
              <li>
                <a href="logout.php">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <span class="link-name">
                    Log out
                  </span>
                </a>
              </li>
            </ul>
          <?php }elseif ($user_level == '9') {
           ?>
           <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a href="admin_dashboard.php">
                  <i class="fa-brands fa-slack"></i>
                  <span class="link-name">
                    Dashboard
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_album.php">
                  <i class="fa-solid fa-inbox"></i>
                  <span class="link-name">
                    Add Album
                  </span>
                </a>
              </li>
              <li>
                <a href="post_manage.php">
                  <i class="fa-solid fa-pen-nib"></i>
                  <span class="link-name">
                    Update
                  </span>
                </a>
              </li>
              <li>
                <a href="post_manage.php">
                  <i class="fa-solid fa-trash"></i>
                  <span class="link-name">
                    Delete
                  </span>
                </a>
              </li>
              <li>
                <a href="manage_admin.php">
                  <i class="fa-solid fa-list-check"></i>
                  <span class="link-name">
                    Manage
                  </span>
                </a>
              </li>
              <li>
                <a href="profile.php">
                  <i class="fa-solid fa-address-card"></i>
                  <span class="link-name">
                    Profile
                  </span>
                </a>
              </li>
              <li>
                <a href="logout.php">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <span class="link-name">
                    Log out
                  </span>
                </a>
              </li>
            </ul>
         <?php } ?>
       </div>
     </div> 