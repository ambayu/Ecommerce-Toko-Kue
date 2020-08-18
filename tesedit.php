<!DOCTYPE html>
<html><head>
<link rel="stylesheet" type="text/css" href="hoe1.css">
    <title>
        
    </title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <style type="text/css">
    
form {
    position: static!important;
    right: auto;
    top: auto;
}
</style>
</head>
<body>


<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<table style="margin-bottom: 20px;margin-left: 2.5%;" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
   
    <tbody>
<?php

            mysql_connect("localhost","root","");
    mysql_select_db("db"); 
      $q="SELECT * FROM `kue`";
  $qe=mysql_query($q);
while ($de =mysql_fetch_array($qe)) {
?>
   
      <tr><?php 
        $id=$de['id'];
        $gambar=$de['Gambar'];
        $judul=$de['Judul'];
        $harga=$de['Harga'];
        $keterangan=$de['Keterangan'];
        $rating=$de['Rating'];
         $penerbit=$de['Kategori']; 

  echo "
       
       <td   style=\"width:200px;\">
            <div class=\"grid\" style=\"float:none\">

                <img src=\"komik/".$gambar."\">

                <a class=\"link\" href=\"\">
                    <p>".$judul."</p>";
         ?>
           <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="delete3.php?id=<?php echo $id; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

     



<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $id; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $id; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">


<form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="edit3.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Data Guru</legend>

<!-- Text input-->
<input name="id" value="<?php echo $id; ?>" style="position: absolute;" ">
<input name="pass2" value="<?php echo $row['password']; ?>" style="position: absolute;" type="hidden">
<div class="form-group">
  <label class="col-md-4 control-label">Nama guru</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input style=" width: 234%" value="<?php echo $row['nama_guru']; ?>" name="nama" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Jenis Kelamin</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="kelamin" style=" width: 234%" value="<?php echo $row['kelamin']; ?>" class="form-control">
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >NIP</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="nip" value="<?php echo $row['nip']; ?>" placeholder="Nomor Induk Pegawai" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" value="<?php echo $row['telpon_guru']; ?>" placeholder="(628)555-1212" style=" width: 234%" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="alamat" value="<?php echo $row['alamat_guru']; ?>" placeholder="Address" style=" width: 234%" class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="username" value="<?php echo $row['username']; ?>" placeholder="UserName" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="password" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
<table style="margin-left: 139px;">
<tr>
<td><!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td><td>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="reset" class="btn btn-waarning" data-dismiss="modal">Close <span class="glyphicon glyphicon-send"></span></button>
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
</div>
       
        </td>
      </tr>
<?php
}
?>
    </tbody>

      </table>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>