<html>
<head>
    <title></title>
</head>
<body>
    <div class="wrapper">

        <?php 
            mysql_connect("localhost","root","");
    mysql_select_db("db");  

            $query=mysql_query("SELECT * FROM `log`");
   $row=mysql_fetch_array($query)

   
                echo"".$row['username'].""
               
                     
                ;

            
         ?>

         
    </div>
</body>
</html>