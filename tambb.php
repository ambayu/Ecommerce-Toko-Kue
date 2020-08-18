<html>
<head>
<link rel="stylesheet" type="text/css" href="tugas.css">
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
            <a href="" style="
    right: 5px;
">Login</a>
            <a href="" style="
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

<form method="POST" action="tambah_proses.php" enctype="multipart/form-data">
            <table>
              <tr>
                    <td>id</td>
                    <td><input type="text" name="id" ></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul" ></td>
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
            </table>
        </form>
	
<div class="con">
<img src="img/b.png" style="
    position: absolute;
    left: 267;
    width: 10;
    height: 59%;
">

<img src="img/2.png" style="
    height: 386px;
    margin: 17px;
    position: absolute;
">
</div>
</div>

<div class="footer">
</div>
</div>
</body>
</html>