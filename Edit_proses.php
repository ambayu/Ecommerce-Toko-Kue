

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
    $sql = mysql_query("UPDATE `kue` SET Judul = '$judul',Harga='$harga',Keterangan='$keterangan',Kategori='$penerbit',Rating='$rating',Gambar='$nama_gambar' WHERE id=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:Product.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
  header("Location:Product.php?error=Data Gagal diubah!!");
    }}
    else{
    	 $sql = mysql_query("UPDATE `kue` SET Judul = '$judul',Harga='$harga',Keterangan='$keterangan',Kategori='$penerbit',Rating='$rating' WHERE id=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:Product.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
  header("Location:Product.php?error=Data Gagal diubah!!");
    }
    }
?>