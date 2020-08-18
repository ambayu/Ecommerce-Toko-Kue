<?php  
	include("koneksi.php");

            $query=("SELECT * FROM `log`");
            $query_exe= mysql_query($query);
            $a=0;
            
            while ($row=mysql_fetch_array($query_exe)) {
            
         
$id_visitor=$row['username'];

            }

	$id_order=$_GET['id'];
	$q="DELETE FROM `pesanan2` WHERE `pesanan2`.`id_order`=$id_order";

	if (mysql_query($q)) {
		header('location:cartt.php');
	} else{
		echo "gagal".mysql_error();
	}
?>