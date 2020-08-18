
<html>
<head>
<link rel="stylesheet" type="text/css" href="pose.css">
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
          mysql_connect("localhost","root","");
    mysql_select_db("db");  
	$id=$_GET['id'];

	$q="SELECT * FROM `komik` WHERE `komik`.`id`='$id'";
	$qe=mysql_query($q);
	while ($de=mysql_fetch_array($qe)) {
		$gambar=$de['Gambar'];
		$judul=$de['Judul'];
		$harga=$de['Harga'];
		$keterangan=$de['Keterangan'];
		echo "	
			<img style=\"
    position: absolute;
    left: 320px;
    top: 317px;
    height: 600px;
\" src=\"komik/".$gambar."\">
			<div class=\"keterangan\">
				<h2 style=\"
    position: absolute;
    top: 301px;
        left: 758px;\">".$judul."</h2>
				<h4 style=\"
    position: absolute;
    right: 512px;
    top: 331px;
\">IDR. ".$harga."</h4>
				<p style=\"
    position: absolute;
 left: 319px;
    top: 950px;
\">".$keterangan."</p>	
		";
	}
?>
<?php  
	$id=$_GET['id'];
	 mysql_connect("localhost","root","");
    mysql_select_db("db");  

        $query=("SELECT * FROM `log`");
            $query_exe= mysql_query($query);
            $a=0;
            
            while ($row=mysql_fetch_array($query_exe)) {
            
         
$id_visitor=$row['username'];

            }
            	

	echo "
		<form style=\"
    position: absolute;
    top: 355px;
    right: 416px;
\" method=\"POST\" action=\"order_input.php?id=$id\">
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
					<td><input type=\"submit\" value=\"Add To Chart\"></td>
				</tr>
			</table>
		</form>
	";
?>
	
    
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