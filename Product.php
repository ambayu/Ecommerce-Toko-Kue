
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
<style type="text/css">
    
form {
    position: static!important;
    right: auto;
    top: auto;
}
</style>
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
<form name="formcari" method="post" style=" position: absolute!important;
    right: 90px!important;
    top: 233px!important;" action="search_exe_admin.php">
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
<br><br>

<div class="List">

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

   
    <tbody>
<?php

            mysql_connect("localhost","root","");
    mysql_select_db("db"); 
      $q="SELECT * FROM `kue`";
  $qe=mysql_query($q);
while ($de =mysql_fetch_array($qe)) {
?>
   
      <?php 
        $id=$de['id'];
        $gambar=$de['Gambar'];
        $judul=$de['Judul'];
        $harga=$de['Harga'];
        $keterangan=$de['Keterangan'];
        $rating=$de['Rating'];
         $penerbit=$de['Kategori']; 
         ?>
    
         <?php
          echo "<table style=\"float: right;text-align: center; margin-left:30px;
   \">
       <tr>
       <td   style=\"width:200px;\">
            <div class=\"grid\" style='float:none;margin-bottom: 31px;'>

                <img src=\"komik/".$gambar."\">

                <a class=\"link\" href=\"\">
                    <p>".$judul."</p></a>
                      <p>IDR. ".$harga."</p>
 <a  href=\"pos_admin.php?id=".$id."\"> <button class='btn btn-danger'  >Detail  &nbsp;<span class='glyphicon glyphicon-search'></span></button></a>
                      ";

                     ?>

           <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="delete3.php?id=<?php echo $id; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

     



<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $id; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $id; ?>">Edit Product</h4>
      </div>
      <div class="modal-body">


<form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="Edit_proses.php" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Detail Product</legend>

<!-- Text input--><div class="form-group">
  <label class="col-md-4 control-label">id</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="id" placeholder="id" class="form-control" readonly type="text" value="<?php echo $de['id']; ?>">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Judul</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="judul" placeholder="Judul" class="form-control"  type="text" value="<?php echo $de['Judul']; ?>">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Harga</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
  <input name="harga" placeholder="Harga" class="form-control" type="text" value="<?php echo $de['Harga']; ?>">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Keterangan</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
 <textarea name="keterangan" placeholder="Keterangan" class="form-control" type="text"> <?php echo $de['Keterangan']; ?> </textarea>
    </div>
  </div>
</div>

   <div class="form-group">
  <label class="col-md-4 control-label">Kategori</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="Penerbit" class="form-control">
  <option value="<?php echo $de['Kategori']; ?>"><?php echo $de['Kategori']; ?></option>
                          <option value="Anak">Anak-Anak</option>
                          <option value="Rekomendasi">Rekomendasi</option>
                             <option value="Ekstra">Ekstra Besar</option>
                          <option value="Kering">Kue Kering</option>
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
  <input  name="Rating" placeholder="Popularitas" class="form-control"  type="text" value="<?php echo $de['Rating']; ?>">
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


<table style="margin-left: 139px;">
<tr>
<td><!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td>


<td>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="reset" class="btn btn-waarning" >Reset <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td>
</tr>

</table>
</fieldset>
</form>

      </div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="reset" style="background-color: #d14841; color: white; " class="btn btn-waarning" data-dismiss="modal">Close <span class="glyphicon glyphicon-send"></span></button>
  </div>
    </div>
  </div>
</div>
       
        </td>
        </div>
      </tr>
<?php
}
?>
    </tbody>

      </table>
                </div>



<div class="footer">
</div>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>