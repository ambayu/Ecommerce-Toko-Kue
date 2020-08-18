
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
error_reporting(0);
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

    top: 220px;
"></a>
</div>
<a href="Home.php"><img src="img/1.png" style="
    width: 912px;
    position: absolute;
    top: 61px;
"></a>
<form name="formcari" method="post" action="seach.php">
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

            <a href="Login.php" style="
    right: 5px;
">Login</a>
            <a href="Daftar.php" style="
    right: 108px;
">Daftar</a>
<a href="contactus.php" style="
    right: 333px;
">Contact US</a>
        <a href="bantuan.php" style="
    right: 214px;
">Bantuan</a>
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
   

    <?php  
          mysql_connect("localhost","root","");
    mysql_select_db("db");  
    $id=$_GET['id'];

    $q="SELECT * FROM `kue` WHERE `kue`.`id`='$id'";
    $qe=mysql_query($q);
    while ($de=mysql_fetch_array($qe)) {
        $gambar=$de['Gambar'];
        $judul=$de['Judul'];
        $harga=$de['Harga'];
        $keterangan=$de['Keterangan'];
        echo "  <br>
            <img style=\"
    float:left;
    width: 600px;
    margin: 0px 19px 0px 0px;
\" src=\"komik/".$gambar."\">
            <div class=\"keterangan\">
                <h2 style=\"
    \">".$judul."</h2>
                <h4 style=\"
   
\">IDR. ".$harga."</h4>
                <p style=\"
 
\">".$keterangan."</p>  
        ";
    }
?>
<?php  
    $id=$_GET['id'];
     mysql_connect("localhost","root","");
    mysql_select_db("db");  


    $_SESSION['x']=session_id();
    $id_visitor=$_SESSION['x'];
                

    echo "
        <form style=\"
position: static;
   
\" method=\"POST\" action=\"order.php?id=$id\">
            <table>
                <tr>
                    <td>Quantity</td>
                </tr>
                <tr>
                    <td><input type=\"text\" name=\"quantity\" value=\"1\"></td>
                </tr>
                  <tr>
                    <td><input type=\"hidden\" name=\"usernamebeli\" value=\"$id_visitor\"></td>
                </tr>
                <tr>
                    <td><br><button type='submit' class='btn btn-danger'  >Add To Chart  &nbsp;<span class='glyphicon glyphicon-shopping-cart'></span></button></td>
                </tr>
            </table>
        </form>
    ";
?>
    
    
</div>

</div>
</div>


<div class="footer">
</div>
</body>
</html>