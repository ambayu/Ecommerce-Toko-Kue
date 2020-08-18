<?php  
	include("koneksi.php");


	
$Jumlah=$_POST['jumlah'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$hp=$_POST['hp'];
		$zip=$_POST['zip'];
	$provinsi=$_POST['provinsi'];
	$alamat=$_POST['alamat'];
$id_visitor=$_POST['usernamebeli'];

$qa="DELETE FROM `pesanan` WHERE `usernamebeli`='$id_visitor'";
  if (mysql_query($qa)) {
  } else{
    echo "gagal";
  }
  
	$q="INSERT INTO `pembayaran` VALUES('$nama','$email','$hp','$zip','$provinsi','$alamat','$id_visitor','$Jumlah')";
	if (mysql_query($q)) {
		header('location:pey_berhasil.php');
		exit;
	}else{
		echo "gagal".mysql_error();
	}
?>