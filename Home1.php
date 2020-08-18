<html>
<head>
<link rel="stylesheet" type="text/css" href="hoe1.css">
	<title>
		
	</title>
</head>
<body>


<div class="wrapper">

<div class="header">
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
        <a href="" style="
    right: 214px;
">Bantuan</a>
</div>

</div>


	<div class="content">
<img src="img/nice.png" style="
    position: absolute;
    height: 384px;
    top: 278px;
    right: 0px;
">
	<div id="images" style="
    position: absolute;
    left: 333px;
    bottom: 75px;
">
<a href="http://wallpaper4xp.blogspot.com/2010/07/3d-graphics-graffiti.html"> <img id="image1" src="imgs/1.png"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/07/girls-field-on-bicycle.html"> <img id="image2" src="imgs/5.jpg"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/09/music-box.html"> <img id="image3" src="imgs/3.jpg" style="
"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/09/glamor-rock-sensation.html"> <img id="image4" src="imgs/4.jpg"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/06/fire-custom-chopper-motorcycle.html"><img id="image5" src="imgs/2.jpg"></a></div>
<div id="slider" style="
    position: absolute;
    left: 324px;
    bottom: 28px;
">
<a href="#image1">1</a>
<a href="#image2">2</a>
<a href="#image3">3</a>
<a href="#image4">4</a>
<a href="#image5">5</a>
</div>
<div class="List">
<?php  


            mysql_connect("localhost","root","");
    mysql_select_db("db"); 
   
    $q="SELECT * FROM `komik`";
    $qe=mysql_query($q);
    while ($de=mysql_fetch_array($qe)) {
        $id=$de['id'];
        $gambar=$de['Gambar'];
        $judul=$de['Judul'];
        $harga=$de['Harga'];
        echo "<table style=\" float:right;text-align: center;
   \">
       <tr>
       <td   style=\"width:290px;\">
            <div class=\"grid\">
                <img src=\"komik/".$gambar."\">
                <a class=\"link\" href=\"pos.php?id=".$id."\">
                    <p>".$judul."</p>
                    <p>IDR. ".$harga."</p>
                </a>

            </div></tr></td>
            </table>
        ";
    }
?>
</div>
</div>
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
    height: 1865px;
    top: 267px;
">

</div>
</div>

<div class="footer">
</div>
</div>
</body>
</html>