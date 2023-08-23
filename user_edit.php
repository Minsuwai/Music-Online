<div class="col-md-9 mt-2">
 <?php  
 $msg='';
 if (isset($_GET['del'])) {
  $user_id=$_GET['del'];        
  $sqldel="SELECT * FROM user WHERE user_id='$user_id'";
  $result=mysqli_query($conn,$sqldel);
  if (mysqli_num_rows($result)>0) 
  {
    while ($row=mysqli_fetch_assoc($result)) 
    {

      mysqli_query($conn,"DELETE FROM user WHERE user_id='$user_id'");
      $msg="<div class='alert alert-success'>Success Deleting</div>";                 
    }

  }else{
    $msg="<div class='alert alert-warning'>Something Wrong !!</div>";

  }
}
?>


<?php if (!isset($_GET['edit'])) {

  ?>
  <div class="vinylview">
    <div class="row">
      <div class="col-md-10">
        <h3 >Manage Accounts</h3>            
      </div>
    </div>
  </div>


  <?php 
  error_reporting(0);
  echo $msg;
  ?>

  <div class="table-respinsive mt-3">


    <?php 
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {


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
        $i = 1;
        while ($row = mysqli_fetch_assoc($ressult)) {
          ?>
          <tr>
            <input type="hidden" name="hidden" value="<?php echo $row['user_id']; ?>">
            <td><?php echo $i; $i++; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['user_address']; ?></td>
            <td><?php echo $row['user_phone']; ?></td>
            <td><?php echo $row['user_level']; ?></td>
            <td><a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td> 
          </tr>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <a href="?del=<?php echo $row['user_id']; ?>" class="btn btn-success"  type="button">Yes</a>
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


<?php } ?>
</div>