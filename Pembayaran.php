<?php 
 mysql_connect("localhost","root","");
    mysql_select_db("db");  

            $query=("SELECT * FROM `log`");
            $query_exe= mysql_query($query);
            $a=0;
            
            while ($row=mysql_fetch_array($query_exe)) {
            
         
$id_visitor=$row['username'];

            }
echo"
<form method=\"POST\" action=\"pay_input.php\">

			<table>
				<tr>
					<td><input type=\"text\" name=\"nama\" placeholder=\"name\"></td>
				</tr>
				<tr>
					<td><input type=\"text\" name=\"email\" placeholder=\"email\"></td>
				</tr>
			
					<td><input type=\"text\" name=\"hp\" placeholder=\"Nomor hp\"></td>
				</tr>
				<tr>
					<td><input type=\"text\" name=\"zip\" placeholder=\"Kode pos\"></td>
				</tr>
				<tr>
					<td><input type=\"text\" name=\"provinsi\" placeholder=\"Provinsi\"></td>
				</tr>
<tr>
					<td><textarea name=\"alamat\" placeholder=\"address\"></textarea></td>
				</tr>
					<tr>
					<td><input type=\"text\" name=\"usernamebeli\" value=\" $id_visitor\"></td>
				</tr>
				
					<td><input type=\"submit\" value=\"PAYMENT\"></td>
				</tr>
			</table>
		</form>"; ?>