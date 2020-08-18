<?php  
	include("koneksi.php");

	$id=$_GET['id'];
	$quantity=$_POST['quantity'];
	$id_visitoor=$_POST['usernamebeli'];

	$q="INSERT INTO `pesanan` VALUES('','$id','$quantity','$id_visitoor')";
	if (mysql_query($q)) {
		header('location:car.php');
		exit;
	}else{
		echo "gagal".mysql_error();
	}
?>