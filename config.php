<?php 
// connect to database
$conn = mysqli_connect("localhost","root","","music_online");
if (!$conn) {
	die(mysqli_connect_error());
}

 ?>