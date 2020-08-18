
<html>
<head>
<link rel="stylesheet" type="text/css" href="hoe1.css">
    <title>
        
    </title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>


<div class="wrapper">

<div class="header">
<div class="chart">
 
<?php 
   mysql_connect("localhost","root","");
    mysql_select_db("db");  

            $query=("SELECT * FROM `log`");
            $query_exe= mysql_query($query);
            $a=0;
            
            while ($row=mysql_fetch_array($query_exe)) {
            
         
$id_visitor=$row['username'];

            }


    $q="SELECT SUM(value) FROM `pesanan2` WHERE `pesanan2`.`usernamebeli`='$id_visitor'";
    $qe=mysql_query($q);
    $row=mysql_fetch_row($qe);
    echo "

        <p>($row[0])</p>
    ";
?>
<a href=""> <img src="img/h.png" style="
    height: 55px;
    position: absolute;
    right: 19;

    top: 205px;
"></a>

        </div>
<a href="pengolaadmin.php"><img src="img/1.png" style="
    width: 912px;
    position: absolute;
    top: 61px;
"></a>
<form name="formcari" method="post" action="search_exe_admin.php">
<table width="330" border="0" align="center" cellpadding="0">
<tbody><tr> 
<td> <input type="text" name="name" placeholder="Search" style="
    height: 36;
    width: 302;
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



<div class="head">
<?php 
            mysql_connect("localhost","root","");
    mysql_select_db("db");  

            $query=("SELECT * FROM `log`");
            $query_exe= mysql_query($query);
            $a=0;
            
            while ($row=mysql_fetch_array($query_exe)) {
            
            $a++;   
                echo "
              <p name='id' style=\"right: 1px;background: white;position: absolute;color: #009999;text-shadow: 1px 1px 0px black;border-radius: 7px;top: 87px;\">SELAMAT DATANG : ".$row['username']."</p>
            
                ";

            }
            
         ?>
               
<a href="Product.php" style="
    right: 409px;
    width: 100px;
    text-align: center;
">Product</a>   
<a href="tambah.php" style="
    right: 273px;
">Add Cake</a>
        <a href="" style="
    right: 124px;
">Add Katalog   </a>
   <a href="Login.php" style="
    right: 7px;
">Logout</a>
</div>

</div>

    <div class="content">

<div class="col-md-4" id="con">
<h1>Katalog</h1>
<a href=""><p>Kue Anak Anak</p></a>
<a href=""><p>Kue Ekstra Besar</p></a>
<a href=""><p>Kue Recomend</p></a>
<h1>Rekomendasi</h1>
<a href=""><p>Kue Kering</p></a>
<a href=""><p>Kue Snack</p></a>
<img src="img/kenapa.png" style="
    margin-left: -18px;
    position: absolute;
">

</div>
    <div class="col-md-8">
   <br><br><br><br>
   <?php
include "koneksi.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from kue where Judul like '%$name%' "; //penquery to get the search result
$result = mysql_query($q); //execute the query $q

echo "<h2 style=\"
    position: absolute;
    right: 671px;
    top:0px;
\"> Hasil Searching </h2>";    

while ($data = mysql_fetch_array($result)) { 
 $id=$data['id'];
        $gambar=$data['Gambar'];
        $judul=$data['Judul'];
        $harga=$data['Harga']; //fetch the result from query into an array
echo "
          <div class=\"grid\" style=\"float: left; margin-right:30px; margin-bottom:20px; text-align:center;\"> 
                <img src=\"komik/".$gambar."\">
               
                    <p>".$judul."</p>
                    <p>IDR. ".$harga."</p>
                     <a  href=\"pos_admin.php?id=".$id."\"> <button class='btn btn-danger'  >Detail  &nbsp;<span class='glyphicon glyphicon-search'></span></button></a>
             
            </div>
        ";
}
echo "</table>";
?>
</div>

</div>
</div>


<div class="footer">
</div>
</body>
</html>