	
<?php
 
$user_name = "root";
$password = "";
$database = "db";
$host_name = "localhost"; 
 
mysql_connect($host_name, $user_name, $password);
 
mysql_select_db($database);
 
echo "Koneksi Terbuka";
 
?>