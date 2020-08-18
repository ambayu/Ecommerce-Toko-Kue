<?php
include "koneksi.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from komik where Judul like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";

while ($data = mysql_fetch_array($result)) { 
 $id=$data['id'];
        $gambar=$data['Gambar'];
        $judul=$data['Judul'];
        $harga=$data['Harga']; //fetch the result from query into an array
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
echo "</table>";
?>