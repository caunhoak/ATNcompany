<html>
<head>
 <ul>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<a href="index.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 </ul>
 </head>
 <body> 
 <style>
 body {
 background-image: url('atnshop.jpg');
 background-position: center;
 background-size: 100%100%;
  
 }
 </style>
   <style>
   table, th, td {
   border: 1px solid violet;
 }
}
</style>
  <table style="width:100%">
  <thread style="text-align:left">
                <tr>
		
                <<th style="background-color:darkblue"><p style="color:white">Product ID<p></th>
                <th style="background-color:darkblue"><p style="color:white">Product Name<p></th>
                <th style="background-color:darkblue"><p style="color:white">Product Price<p></th>
                <th style="background-color:darkblue"><p style="color:white">Amount<p></th>
		<th style="background-color:darkblue" colspan="2" align="center">Operation</th>	
                </tr>
<?php
            $host_heroku = "ec2-3-231-69-204.compute-1.amazonaws.com";
			$db_heroku = "d5boqk3bekfndr";
			$user_heroku = "zweujvxfknurip";
			$pw_heroku = "a34706f696373b39c20d08e062a4bba2c33d0f9febe6eeaa26e77985c92a9e5e";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);     		
if (!$pg_conn)
{
  die('Error: Could not connect: ' . pg_last_error());
}
 $query = 'select * from shop2';
$data = pg_query($pg_conn, $query);
 $total = pg_num_rows($data);
if($total!=0)
{
while ($result=pg_fetch_assoc($data))
{
echo "
<tr>
                <td>".$result['productid']."</td>
                <td>".$result['productname']."</td>
                <td>".$result['productprice']."</td>
                <td>".$result['amount']."</td>
<td><a
href='update1.php?id=$result[productid]&n=$result[productname]&p=$result[productprice]&am=$result[amount]'>
Edit/Update</td>
<td><a href='delete2.php?id=$result[productid]'>Delete</td>
</tr>
";
}
}

?>
<style>
input[type=submit]{
  background-color: #FFCCFF;
  border:none;
  color:white;
  padding: 16px 32px;
  text-decoration:none;
  margin:4px 2px;
  cursor:pointer;
}
</style>	  
 <form action="https://datpt.herokuapp.com/add2.php">
 <input type="submit" value="Add" />
</form>
</body>
</html>
