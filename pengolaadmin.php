
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
   
<img src="img/nice.png" style="
    position: absolute;
    height: 279px;
    top: 136px;
    right: 0px;
    z-index: 2;
">
<br><br><br>
    <div id="images" style="z-index: 1;
">
<a href="http://wallpaper4xp.blogspot.com/2010/07/3d-graphics-graffiti.html"> <img id="image1" src="imgs/1.jpg"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/07/girls-field-on-bicycle.html"> <img id="image2" src="imgs/5.jpg"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/09/music-box.html"> <img id="image3" src="imgs/3.jpg" style="
"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/09/glamor-rock-sensation.html"> <img id="image4" src="imgs/4.jpg"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/06/fire-custom-chopper-motorcycle.html"><img id="image5" src="imgs/2.jpg"></a></div>
<div id="slider" style="
">
<a href="#image1">1</a>
<a href="#image2">2</a>
<a href="#image3">3</a>
<a href="#image4">4</a>
<a href="#image5">5</a>
</div>
<br><br><br>
<div class="List">
<?php  


            mysql_connect("localhost","root","");
    mysql_select_db("db"); 
   
    $q="SELECT * FROM `kue`";
    $qe=mysql_query($q);
    while ($de=mysql_fetch_array($qe)) {
        $id=$de['id'];
        $gambar=$de['Gambar'];
        $judul=$de['Judul'];
        $harga=$de['Harga'];
        echo "<table style=\"float: left;text-align: center; margin-right:30px; margin-bottom:20px;
   \">
       <tr>
       <td   style=\"width:200px;\">
            <div class=\"grid\" style=\"float:none\">
                <img src=\"komik/".$gambar."\">
                <a class=\"link\" href=\"\">
                    <p>".$judul."</p>
                    <p>IDR. ".$harga."</p>
                </a>
                     <a  href=\"pos_admin.php?id=".$id."\"> <button class='btn btn-danger'  >Detail  &nbsp;<span class='glyphicon glyphicon-search'></span></button></a>
            </div></tr></td>
            </table>
        ";
    }
?>
</div>
</div>
</div>
</div>

<div class="footer">
</div>
</div>
</body>
</html>