<?php
      				$host_heroku = "ec2-3-219-111-26.compute-1.amazonaws.com";
                  $db_heroku = "deohem0songcaa";
                  $user_heroku = "qpcmfaakpjjjps";
                  $pw_heroku = "eeee2b3fbe5ff9b98515af186beeeb5b2b9bddb7f2aa4ea266abef44059990ff";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
            if (!$pg_conn)
            {
            die('Error: Could not connect: ' . pg_last_error());
            }
            ?>
            <html>
             <head>
             <title> Add for ATNshop2 </title>
             </head>
             <body>
            <style>
             body {
             background-image: url('add1.jpeg');
             background-attachment: fixed;
             background-size: 100%100%;
             }
             </style>
             <br>
             <form action="" method="GET">
             <table border"0" bgcolor="yellow" align="center" cellspacing="20">
                <tr>
             <td>Product ID</td>
             <td><input type="text" value="" name="productid" required></td>
             </tr>
            
             <tr>
             <td>Product Name</td>
             <td><input type="text" value="" name="productname" required></td>
             </tr>
            
             <tr>
             <td>Product Price</td>
             <td><input type="text" value="" name="productprice" required></td>
             </tr>
            
             <tr>
             <td>Amount</td>
             <td><input type="text" value="" name="amount" required></td>
             </tr>
            
             <tr>
             <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Add"></td>
             </tr>
             </form>
             </table>
            </body>
            </html>
            <?php
            if($_GET['submit'])
            {
            $id=$_GET['productid'];
            $n=$_GET['productname'];
            $p=$_GET['productprice'];
            $am=$_GET['amount'];
            $query = "INSERT INTO shop2 VALUES ('$id','$n','$p','$am')";
            $data = pg_query($pg_conn,$query);
            if($data)
            {
            echo "<script>alert('Added Successfully!')</script>";
            ?>
            <meta http-equiv="refresh" content="2; url=https://tannd.herokuapp.com/shop2.php">
            <?php
            }
            else
            {
            echo "Failed to update the table.";
            }
            }
     ?>
