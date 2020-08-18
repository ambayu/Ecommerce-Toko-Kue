<?php 
	include ("lkoneksi.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
$radio = $_POST['radio'];

if ($radio=='member') {
	$query = ("SELECT * FROM `data` WHERE username='$username' and password='$password'");
	$queryexe = mysql_query($query);
	$exe = mysql_num_rows($queryexe);

	if ($exe == 1) {

	
		$username = $_POST['username'];
		$sql = mysql_query("INSERT INTO `log`(`username`) VALUES ('$username')");
$queryexe = mysql_query($query);
	$exe = mysql_num_rows($queryexe);
	header("location: list.php");
	
	}
	else{
		$eror = "cek ulang username dan password";
		header("location: login.php?eror=$eror");
	

 
	}
}

else if ($radio=='admin') {
	$query = ("SELECT * FROM `admin` WHERE username='$username' and password='$password'");
	$queryexe = mysql_query($query);
	$exe = mysql_num_rows($queryexe);

	if ($exe == 1) {

	
		$username = $_POST['username'];
		$sql = mysql_query("INSERT INTO `log`(`username`) VALUES ('$username')");
$queryexe = mysql_query($query);
	$exe = mysql_num_rows($queryexe);
	header("location: pengolaadmin.php");
	
	}
	else{
		$eror = "cek ulang username dan password admin";
		header("location: login.php?eror=$eror");
	

 
	}
	}
 ?>
