<html>
<head>
<link rel="stylesheet" type="text/css" href="mem.css">
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
              <p name='id' style='position: absolute;'>".$row['username']."</p>
             
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

	<div id="images" style="
    position: absolute;
    left: 501px;
    bottom: 75px;
">
<a href="http://wallpaper4xp.blogspot.com/2010/07/3d-graphics-graffiti.html"> <img id="image1" src="imgs/1.png"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/07/girls-field-on-bicycle.html"> <img id="image2" src="imgs/5.jpg"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/09/music-box.html"> <img id="image3" src="imgs/3.jpg" style="
"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/09/glamor-rock-sensation.html"> <img id="image4" src="imgs/4.jpg"></a>

<a href="http://wallpaper4xp.blogspot.com/2010/06/fire-custom-chopper-motorcycle.html"><img id="image5" src="imgs/2.jpg"></a></div>
<div id="slider" style="
    position: absolute;
    left: 492px;
    bottom: 28px;
">
<a href="#image1">1</a>
<a href="#image2">2</a>
<a href="#image3">3</a>
<a href="#image4">4</a>
<a href="#image5">5</a>
</div>
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