<?php

	include ('koneksi.php');

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
		$alamat = $_POST['alamat'];
			$phone = $_POST['phone'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	$sql = mysql_query("INSERT INTO `data`(`firstname`,`lastname`,`email`,`username`,`password`,`Address`,`Phone`) VALUES ('$first_name','$last_name','$email','$username','$password','$alamat','$phone')");
	
	if ($sql == 1) {
		header("location: Daftar.php?id=1");
	}
	else{
		header("location: Daftar.php?id=0");
	}
 ?>