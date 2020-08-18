
<html>
<head>
<link rel="stylesheet" type="text/css" href="listo.css">
    <title>
        
    </title>
</head>
<body>


<div class="wrapper">

<div class="header">

<a href="list.php"><img src="img/1.png" style="
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

            $query=("SELECT * FROM `log`");
            $query_exe= mysql_query($query);
            $a=0;
            
            while ($row=mysql_fetch_array($query_exe)) {
            
         
$id_visitor=$row['username'];

            }


    $q="SELECT SUM(value) FROM `pesanan` WHERE `pesanan`.`usernamebeli`='$id_visitor'";
    $qe=mysql_query($q);
    $row=mysql_fetch_row($qe);
    echo "

        <p>($row[0])</p>
    ";
?>
<a href="cartt.php"> <img src="img/h.png" style="
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
    right: 0px;
">Logout</a>
           
<a href="" style="
    right: 250px;
">Contact US</a>
        <a href="" style="
    right: 120px;
">Bantuan</a>
</div>

</div>


    <div class="content">
    <form method="POST" action="tambah_proses.php" enctype="multipart/form-data" style="margin: 100px 300px 0px 1px;background: #009999;">
            <table>
              <tbody><tr>
                    <td>id</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><textarea name="keterangan"></textarea></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="Penerbit"></td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td><input type="text" name="Rating"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="INPUT"></td>
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
    height: 213%;
    top: 267px;
">

</div>
</div>

<div class="footer">
</div>
</div>
</body>
</html>