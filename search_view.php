
<div class="container  mt-2 me-auto">
  <div class="container-fluid  mt-2 me-auto">
    <div class="row container-fluid mt-2" style="margin-bottom: 25px;">
      <h3  href="#" style="font-size: 30px; color: white;">Search Result</h3>
      <?php
      if (isset($_POST['search'])){
        $textsearch = sanitize(mysqli_real_escape_string($conn, $_POST['textsearch']));

        if ($textsearch == '') {
          $msg = "<div class='alert alert-warning'>Enter text you want to search</div>";
        }
        else{
          $sql = "SELECT * FROM vinyls WHERE v_artist LIKE '%".$textsearch."%' OR v_album LIKE '%".$textsearch."%' OR v_genre LIKE '%".$textsearch."%' ";

          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <div class="col-md-3 mt-2">
                <div class="card mt-2">
                  <img src="<?php echo $row['v_image'] ?>" class="card-img-top" alt="..." style="height: 200px;" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $row['v_id']; ?>" >
                  <div class="card-bordy text-white working-with-me" style="text-align: center; background-color: #0A2558;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Album: &nbsp;&nbsp;<?php echo $row['v_album'] ?></li>
                      <li class="list-group-item">Artist:&nbsp;&nbsp;<?php echo $row['v_artist'] ?></li>  

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
              <?php 
            }
          }
          else{
            ?>
            <div class="row">
              <div class="col-8 m-auto">
                <img src="images/page_not_found.gif" class="img-fluid">
              </div>
            </div>
            <?php                  
          }           
        }
      }
      ?>

    </div>
  </div>
</div>
