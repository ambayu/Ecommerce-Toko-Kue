
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
   <br>
<table style="width: 97.5%;max-width: 100%;margin-bottom: 20px;text-align:center" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <tr  >
                <th style="text-align: center;">Item</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Quantity&nbsp; &nbsp;</th>
                <th style="text-align: center;">Harga&nbsp; &nbsp;</th>
                <th style="text-align: center;">Batal &nbsp;&nbsp;</th>
            </tr>
<?php
      mysql_connect("localhost","root","");
    mysql_select_db("db"); 
    

    $id_visitor=$_SESSION['x'];

    $q="SELECT`kue`.Judul,Harga,Gambar,`pesanan`.value,id_order
        FROM `kue`
        LEFT JOIN `pesanan`
        ON `kue`.id=`pesanan`.id_product
            WHERE '$id_visitor'=`pesanan`.usernamebeli

    ";
    $eq=mysql_query($q);
    $total=0;
    while ($de=mysql_fetch_array($eq)) {
        $id_order=$de['id_order'];
        $gambar=$de['Gambar'];
        $judul=$de['Judul'];
        $quantity=$de['value'];
        $harga=$de['Harga'];
        $tharga=$harga*$quantity;
        $total += $tharga;
        echo "
            <tr>
                <td><img  style=\"
    height: 150px;
\" src=\"komik/".$gambar."\"></td>
                <td>".$judul."</td>
                <td class=\"quantity\" >".$quantity."</td>
                <td>".$tharga."</td>
                <td> <a  href=\"deletee.php?id=$id_order\"> <button class='btn btn-danger'  >Batal  &nbsp;<span class='glyphicon glyphicon-remove'></span></button></a></td>
            </tr>
            
        ";
    }

?>

        </table>
<?php  
    echo "<div class=\"total\">Total: ".$total."</div>";
?>

<?php
    
    echo "
        <a  href=\"home.php\"> <button class='btn btn-danger'  >Back Shopping  &nbsp;<span class='glyphicon glyphicon-shopping-cart'></span></button></a>
    ";
?>&nbsp;
    <a  href="pey.php?total=<?php echo $total; ?>"> <button class='btn btn-danger'  >CHECKOUT  &nbsp;<span class='glyphicon glyphicon-yen'></span></button></a>
    

</div>

</div>
</div>


<div class="footer">
</div>
</body>
</html>