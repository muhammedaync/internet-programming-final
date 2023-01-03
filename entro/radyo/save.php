<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
	require_once 'conn.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `sesVEresimDeğiştirmek`(sesİSİM,sesBağlantıAdres,resim) VALUES('$firstname', '$lastname', '$path')") or die(mysqli_error());
				echo "<script>alert('ayrıntılar kaydedildi!')</script>";
				header("location: index.php");
			}	
		}else{
			echo "<script>alert('sadece resim yüklebbilirsiniz')</script>";
		}
	}
?>