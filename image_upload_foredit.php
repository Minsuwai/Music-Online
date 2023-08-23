<?php 
	if (isset($_FILES["albumcover"] ["name"]) && $_FILES["albumcover"] ["name"] !="") {
		$target_dir = "images/album/";

		$target_file = $target_dir . basename($_FILES["albumcover"] ["name"]);
		$image_name = basename($_FILES["albumcover"] ["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image

		$check = getimagesize($_FILES["albumcover"] ["tmp_name"]);

		if ($check !== false) {
			$uploadOk = 1;
		}
		else {
			echo "File is not an image.";
			$uploadOk = 0;
		}

		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}

		// Check file size
		if ($_FILES["albumcover"] ["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

		// Allow certain file formats

		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
	}
	else{
		$uploadOk = 2;
	}
 ?>