
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
   

    <form style="background-color: #ffff;border: 1px solid #e3e3e3; top: 21px; " class="well form-horizontal" action="tambah_proses.php" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Add Kue</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">id</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="id" placeholder="id" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Judul</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="judul" placeholder="Judul" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Harga</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
  <input name="harga" placeholder="Harga" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Keterangan</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
 <textarea name="keterangan" placeholder="Keterangan" class="form-control" type="text"></textarea>
    </div>
  </div>
</div>

   <div class="form-group">
  <label class="col-md-4 control-label">Kategori</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="Penerbit" class="form-control">
                          <option value="Anak-Anak">Anak-Anak</option>
                          <option value="Rekomendasi">Rekomendasi</option>
                             <option value="Ekstra Besar">Ekstra Besar</option>
                          <option value="Kue Kering">Kue Kering</option>
                          <option value="Snack">Snack</option>
                        </select>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Popularitas</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Rating" placeholder="Popularitas" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Gambar</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
<input type="file" name="gambar">
    </div>
  </div>
</div>
<?php 
if (isset($_GET['id']))
{
   $error=$_GET['id'];
if ($error==1) {
 ?>
<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
<?php
}
if ($error==0) {
     ?>
   <div class="alert alert-danger" role="alert" id="danger_message">Danger <i class="glyphicon glyphicon-thumbs-down"></i> Register Failed , Data requaired or wrong !!.</div>
<?php 
}
}
else
{
   $error="";
}
   ?>

<br><br>
<table style="margin-left: 332px;">
<tr>
<td><!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4" style="right: 195px;">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td><td>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4" style="right: 195px;">
    <button type="reset" class="btn btn-waarning"  >Reset <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td>
</tr>
</table>
</fieldset>
</form>
</div>

</div>
</div>


<div class="footer">
</div>
</body>
</html>