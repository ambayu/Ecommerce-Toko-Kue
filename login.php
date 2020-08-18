
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
?><a href="car.php"> <img src="img/h.png" style="
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
   
  <form action="proses_login.php" method="POST" style="
    background: #d14841;
    height: 330px;
    border-radius: 7px;
    width: 471px;
    top: 134;
    right: 205px;
">

                <table>
                    <tbody><tr>
                        <td><img width="45" src="log/a.png" style="
    position: absolute;
    top: 78px;
    left: 52px;
"><input type="name" name="username" placeholder="username" style="
    position: absolute;
    top: 83px;
    left: 112px;
    height: 35px;
    width: 264px;
    font-size: 21px;
     border-radius: 7px;
"></td>
                    </tr>

                    <tr>
                        <td><img width="45" src="log/b.png" style="
    position: absolute;
    top: 151px;
    left: 52px;
"><input type="password" name="password" placeholder="password" style="
    position: absolute;
    left: 112;
    height: 35;
    width: 264;
    font-size: 21px;
    top: 156px;
    border-radius: 7px;
"></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="login" style="background: white;position: absolute;bottom: 45px;left: 120px;height: 57px;width: 100px;r color: wh;border color: whi;border color: whir;border color: whire;border-radius: 7px;font-size: 21px;">
                        </td>
                        <td>

     <a href="Daftar.php" style="
    background: white;
    position: absolute;
    bottom: 45px;
    left: 226px;
    height: 57px;
    width: 100px;
    color: black;
    border-radius: 7px;
    font-size: 21px; text-align: center; text-decoration: none; padding: 14px;
   ">SignUp</a></td>

                    </tr>

<tr style="color: white;">
    <td "> <input type="radio" checked="checked" name="radio" value="member">Member &nbsp;&nbsp;&nbsp;</td>
      <td> <input type="radio" name="radio" value="admin">Admin</td>
    
</tr>
                </tbody>

                </table>
            </form>
    
</div>

</div>
</div>


<div class="footer">
</div>
</body>
</html>