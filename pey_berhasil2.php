
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
?><a href="cartt.php"> <img src="img/h.png" style="
    height: 55px;
    position: absolute;
    right: 19;

    top: 220px;
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
<a href="contactus.php" style="
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
   <br><br>
<fieldset>

  <legend sty>Terima kasih telah membeli kue di titah kue</legend>

</fieldset>
<?php
include "koneksi.php";
 $id_visitor=$ras;
$q = "SELECT * from `pembayaran` where `usernamebeli`='$id_visitor' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
while ($data = mysql_fetch_array($result)) { 
 
        $nama=$data['Nama'];
        $judul=$data['Alamat'];
        $harga=$data['Total']; //fetch the result from query into an array
;
}

?>

<table><tr><td><div class="form-group">
  <label class="col-md-4 control-label" style="width: 130px">Nama</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group" style="width: 330px">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="alamat" readonly placeholder="Address" class="form-control" type="text" value="<?php echo $nama; ?>">
    </div>
  </div>
</div></td></tr><tr>

<td><br><div class="form-group" >
  <label class="col-md-4 control-label"  style="width: 130px">Total Belanja</label>  
    <div class="col-md-4 inputGroupContainer"  style="width: 120px">
    <div class="input-group" style="width: 330px">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="alamat" readonly placeholder="Address" class="form-control"  type="text" value="Rp. <?php echo $harga; ?>">
    </div>
  </div>
</div></td></tr>

<tr>

<td><br><div class="form-group">
  <label class="col-md-4 control-label" style="width: 130px">Alamat</label>  
    <div class="col-md-4 inputGroupContainer">  
    <div class="input-group" style="width: 330px">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="alamat" readonly placeholder="Address" class="form-control" type="text" value="<?php echo $judul; ?>">
    </div>
  </div>
</div></td></tr>

</table>
<br><br>
<legend>Segera Lakukan Transfer Rekening Ke Rekening:</legend>
<div class="bank">
<fieldset>
<p style="color: orange;font-size: 71px;">BNI : 88903839229</p>
<p style="color: blue;font-size: 71px;">BRI : 77837789299</p>
<p style="color: green;font-size: 71px;">MANDIRI : 1234567878</p></fieldset>
</div>
</div>
</div>


<div class="footer">
</div>
</body>
</html>