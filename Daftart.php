
<html>
<head>
<link rel="stylesheet" type="text/css" href="daftar.css">
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
<form name="formcari" method="post" action="search_exe.php">
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
    
  <form action="proses_input.php" method="POST" enctype="multipart/form-data" style="
    background: #008080;
    position: absolute;
    right: 35px;
    top: 260px;
    margin: 79px 350px 0px -5px;
">
                <table>
                    <tbody><tr>
                        <td><input type="text" name="firstname" placeholder="first name"></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="lastname" placeholder="last name"></td>                       

                    </tr>
                     <tr>
                        <td><input type="text" name="email" placeholder="Email"></td>                       

                    </tr>
                    <tr>
                        <td><input type="text" name="username" placeholder="username"></td>

                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="password" style="
    margin-left: 14px;
    margin-top: 7px;
    height: 31px;
    width: 318px;
"></td>

                    </tr>
                   
                    <tr>
                        <td><input type="submit" value="Daftar" style="
    margin: 17px 14px;
    height: 37px;
    width: 92px;
    border-radius: 7px;
"></td>

                    </tr>

                </tbody></table>

            </form>
<div class="con">
<h1>RATING USIA</h1>
<p>Anak Anak</p>
<p>Remaja</p>
<p>Dewasa</p>
<h1>PENERBIT</h1>
<p>Elex media komputindo</p>
<p>M&C</p>
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