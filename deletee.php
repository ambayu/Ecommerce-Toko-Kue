<?php  
	include("koneksi.php");

          session_start();
 
    $id_visitor=$_SESSION['x'];

          

	$id_order=$_GET['id'];
	$q="DELETE FROM `pesanan` WHERE `pesanan`.`id_order`=$id_order";

	if (mysql_query($q)) {
		header('location:car.php');
	} else{
		echo "gagal".mysql_error();
	}
?>