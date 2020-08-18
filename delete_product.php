<?php  
	include("koneksi.php");

        
	$id_order=$_GET['id'];

	$q="DELETE FROM `komik` WHERE `id`=$id_order";

	if (mysql_query($q)) {
		header('location:product.php');
	} else{
		echo "gagal".mysql_error();
	}
?>