
<html>
<head>
<link rel="stylesheet" type="text/css" href="listo.css">
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

         <img src="img/h.png" style="
    height: 55px;
    position: absolute;
    right: 19;

    top: 205px;
"></a></div>

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
              <p name='id' style='position: absolute;'>SELAMAT DATANG ADMIN : ".$row['username']."</p>
             
                ";

            }
            
         ?>
<img src="img/h.png" style="
    height: 55px;
    position: absolute;
    right: 19;
    top: 205px;
">
            <a href="Login.php" style="
    right: 0px;
">Logout</a>
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
    $q="SELECT * FROM `komik`";
    $qe=mysql_query($q);
    while ($de=mysql_fetch_array($qe)) {
        $id=$de['id'];
        $gambar=$de['Gambar'];
        $judul=$de['Judul'];
        $harga=$de['Harga'];
        echo "
            <div class=\"grid\">
                <img src=\"komik/".$gambar."\">
                <a class=\"link\" href=\"post.php?id=".$id."\">
                    <p>".$judul."</p>
                    <p>IDR. ".$harga."</p>
                </a>
            </div>
        ";
    }
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