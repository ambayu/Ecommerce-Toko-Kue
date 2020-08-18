
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/cart.css">
</head>
<body>
	<header>
		<h3>SHOPPING CART</h3>
	</header>
	<div class="content">
		<table>
			<tr>
				<th>Item</th>
				<th></th>
				<th></th>
				<th></th>
				<th>Quantity</th>
				<th>Harga</th>
				<th></th>
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
	$q="SELECT`komik`.Judul,Harga,Gambar,`pesanan2`.value,id_order
		FROM `komik`
		LEFT JOIN `pesanan`
		ON `komik`.id=`pesanan2`.id_product
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
				<td><img src=\"komik/".$gambar."\"></td>
				<td>".$judul."</td>
				<td></td>
				<td></td>
				<td class=\"quantity\" >".$quantity."</td>
				<td>".$tharga."</td>
				<td><a href=\"delete.php?id=$id_order\">x</td>
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
		<a class=\"back\" href=\"index.php\">Back Shopping</a>
	";
?>
	<a class="checkout" href="pay.php">CHECKOUT</a>

	</div>
	<footer></footer>
</body>
</html>