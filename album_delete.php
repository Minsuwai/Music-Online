<?php 
	$msg = '';
	if (isset($_GET['delpost'])) {
		$vinyl_id = $_GET['delpost'];

		$sqldel = "SELECT * FROM vinyls WHERE v_id='$vinyl_id' ";

		$result = mysqli_query($conn, $sqldel);
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$delimage = $row['v_image'];
				if (file_exists($delimage)) {
					unlink($delimage);
					mysqli_query($conn, "DELETE FROM vinyls WHERE v_id = '$vinyl_id' ");

					$msg = "<div class='alert alert-success'>Success Deleting</div>";
				}

				else {
					$msg = "<div class='alert alert-success'>Sorry</div>";
				}
			}
		}
	}
 ?>