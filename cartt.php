
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
 
<?php mysql_connect("localhost","root","");
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
<a href="cartt.php"> <img src="img/h.png" style="
    height: 55px;
    position: absolute;
    right: 19;

    top: 205px;
"></a>

        </div>
<a href="Home2.php"><img src="img/1.png" style="
    width: 912px;
    position: absolute;
    top: 61px;
"></a>
<form name="formcari" method="post" action="search_exe.php">
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
            $ras=$row['username'];
            $a++;   
               

            } echo "
              <p name='id' style=\"right: 1px;background: white;position: absolute;color: #009999;text-shadow: 1px 1px 0px black;border-radius: 7px;top: 87px;\">SELAMAT DATANG  :  ".$ras."</p>
            
                ";
            
         ?>
               
<a href="List.php" style="
    right: 394px;
    width: 100px;
    text-align: center;
">List</a>   
<a href="" style="
    right: 250px;
">Contact US</a>
        <a href="bantuan.php" style="
    right: 124px;
">Bantuan</a>
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
   <br>  
<table style="width: 97.5%;max-width: 100%;margin-bottom: 20px;text-align:center" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

             <tr>
                <th>Item</th>
                <th>Judul</th>
        
                <th>Quantity</th>
                <th>Harga</th>
                <th>Batal</th>
            </tr>
<?php
      mysql_connect("localhost","root","");
    mysql_select_db("db"); 
    
            $query=("SELECT * FROM `log`");
            $query_exe= mysql_query($query);
            $a=0;
            
            while ($row=mysql_fetch_array($query_exe)) {
            
         
$id_visitor=$row['username'];

            }
    $q="SELECT`kue`.Judul,Harga,Gambar,`pesanan2`.value,id_order
        FROM `kue`
        LEFT JOIN `pesanan2`
        ON `kue`.id=`pesanan2`.id_product
            WHERE '$id_visitor'=`pesanan2`.usernamebeli

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
             
                 <td> <a href=\"delete.php?id=$id_order\"> <button class='btn btn-danger'  >Batal  &nbsp;<span class='glyphicon glyphicon-remove'></span></button></a></td>
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
        <a  href=\"home2.php\"> <button class='btn btn-danger'  >Back Shopping  &nbsp;<span class='glyphicon glyphicon-shopping-cart'></span></button></a>
    ";
?>&nbsp;
    <a  href="pay.php?total=<?php echo $total; ?>"> <button class='btn btn-danger'  >CHECKOUT  &nbsp;<span class='glyphicon glyphicon-yen'></span></button></a>
    

</div>

</div>
</div>


<div  class="footer" style="background: #d14841; height:10px; width: 100%; margin-top: 100% ;">
</div>
</body>
</html>