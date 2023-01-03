<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
	require_once 'conn.php';
	if(isset($_POST['edit'])){
		$user_id = $_POST['user_id'];
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$previous = $_POST['previous'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/" . $name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `sesVEresimDeğiştirmek` set `sesİSİM` = '$firstname', `sesBağlantıAdres` = '$lastname', `resim` = '$path' WHERE `ses_id` = '$user_id'") or die(mysqli_error());
					echo "<script>alert('User account updated!')</script>";
					header("location: index.php");
				}else {
					echo "error";
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}else {
		echo "post not set";
	}
?>