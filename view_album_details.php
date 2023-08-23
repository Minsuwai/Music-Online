<?php 
if (isset($_POST['vinyl_id'])) {
	$output='';
	$conn = mysqli_connect("localhost", "root", "", "music_online");
	$result = mysqli_query($conn, "SELECT * FROM vinyls WHERE v_id = '$_POST[vinyl_id]' ");
	$output.='<div class="card">';
	while ($row = mysqli_fetch_array($result)) {
		$output.='
		<img style="height:300px" src='.$row['v_image'] . '>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Artist: '.$row['v_artist'].'</li>
		<li class="list-group-item">Album: '.$row['v_album'].'</li>
		<li class="list-group-item">Released Year: '.$row['v_releasedate'].'</li>
		<li class="list-group-item">Genre: '.$row['v_genre'].'</li>
		<li class="list-group-item">Price: $'.$row['v_price'].'</li>
		</ul>
		';
	}
	$output.="</div>";
	echo $output;
}
?>