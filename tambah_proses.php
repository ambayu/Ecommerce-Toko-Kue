<?php 
	include("koneksi.php");

$id=$_POST['id'];
	$judul=$_POST['judul'];
	$harga=$_POST['harga'];
	$keterangan=$_POST['keterangan'];
	$penerbit=$_POST['Penerbit'];
	$rating=$_POST['Rating'];


	$nama_gambar=$_FILES['gambar']['name'];
	$tmp_gambar=$_FILES['gambar']['tmp_name'];
	$dir_gambar="komik/$nama_gambar";

	if  (move_uploaded_file($tmp_gambar, $dir_gambar)) {
		$q="INSERT INTO `kue` VALUES ('$id','$judul','$keterangan','$penerbit','$rating','$harga','$nama_gambar')";
		if (mysql_query($q)) {
			header('location:tambah.php');
			exit;
		} else{
			echo "tambah gagal".mysql_error();
		}
	}else{
		echo "upload gagal";
	}
?>