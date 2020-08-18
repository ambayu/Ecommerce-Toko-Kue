<?php  
	include("koneksi.php");

	$id=$_GET['id'];
	$quantity=$_POST['quantity'];
	$id_visitoor=$_POST['usernamebeli'];

	$q="INSERT INTO `pesanan2` VALUES('','$id','$quantity','$id_visitoor')";
	if (mysql_query($q)) {
		header('location:cartt.php');
		exit;
	}else{
		echo "gagal".mysql_error();
	}
?>