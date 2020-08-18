
<html>
<head>
<link rel="stylesheet" type="text/css" href="sarch.css">
    <title>
        
    </title>
</head>
<body>


<div class="wrapper">

<div class="header">

<a href="Home.php"><img src="img/1.png" style="
    height: 268;
    position: absolute;
"></a>
<form name="formcari" method="post" action="seach.php">
<table width="330" border="0" align="center" cellpadding="0">
<tbody><tr> 
<td> <input type="text" name="name" placeholder="Search" style="
    height: 36;
    width: 484;
    border-radius: 7px;
    margin: 3px;
"></td>
<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="" style="
    height: 42px;
    width: 63px;
    border-radius: 7px;
    background: url(img/e.png) 0 0 no-repeat;
"></td>
</tr>
</tbody></table>
</form>

<div class="chart">
 
<?php 
   mysql_connect("localhost","root","");
    mysql_select_db("db");  

    session_start();
 
    $id_visitor=$_SESSION['x'];


    $q="SELECT SUM(value) FROM `pesanan` WHERE `pesanan`.`usernamebeli`='$id_visitor'";
    $qe=mysql_query($q);
    $row=mysql_fetch_row($qe);
    echo "

        <p>($row[0])</p>
    ";
?>
<a href="car.php"> <img src="img/h.png" style="
    height: 55px;
    position: absolute;
    right: 19;

    top: 205px;
"></a>
</div>
<div class="head">

            <a href="Login.php" style="
    right: 5px;
">Login</a>
            <a href="Daftar.php" style="
    right: 108px;
">Daftar</a>
<a href="" style="
    right: 333px;
">Contact US</a>
        <a href="" style="
    right: 214px;
">Bantuan</a>
</div>

</div>


    <div class="content">
   
   <?php
include "koneksi.php";
$name= $_REQUEST["Anak"]; //get the nama value from form
$q = "SELECT * from komik where Rating like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q

echo "<h2 style=\"
    position: absolute;
    left: 688px;
\"> Hasil Searching </h2>";

while ($data = mysql_fetch_array($result)) { 
 $id=$data['id'];
        $gambar=$data['Gambar'];
        $judul=$data['Judul'];
        $harga=$data['Harga']; //fetch the result from query into an array
echo "
            <div class=\"grid\">
                <img src=\"komik/".$gambar."\">
                <a class=\"link\" href=\"pos.php?id=".$id."\">
                    <p>".$judul."</p>
                    <p>IDR. ".$harga."</p>
                </a>
            </div>
        ";
}
echo "</table>";
?>
<div class="con">
<h1>RATING USIA</h1>
<a href=""><p>Anak Anak</p></a>
<a href=""><p>Remaja</p></a>
<a href=""><p>Dewasa</p></a>
<h1>PENERBIT</h1>
<a href=""><p>Elex media komputindo</p></a>
<a href=""><p>M&C</p></a>

<img src="img/kenapa.png" style="
    margin-left: -18px;
    position: absolute;
">
<img src="img/b.png" style="
    position: absolute;
    left: 267;
    width: 10;
    height: 111%;
    top: 267px;
">

</div>
</div>

<div class="footer">
</div>
</div>
</body>
</html>