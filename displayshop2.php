<html>
	<ul>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<a href="adminatn.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 </ul>
<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;

 <style>
   table, th, td {
   border: 1px solid violet;
 }
}
</style>
	 <style>
 body {
 background-image: url('displayshop.jpg');
 background-attachment: fixed;
 background-size: 100%100%;
 }
 </style>
  <table style="width:100%">
  <thread style="text-align:left">
                <tr>
		
                <th style="background-color:darkblue"><p style="color:white"><style="text-align:center">Product ID<p></th>
                <th style="background-color:darkblue"><p style="color:white"><style="text-align:center">Product Name<p></th>
                <th style="background-color:darkblue"><p style="color:white"><style="text-align:center">Product Price<p></th>
                <th style="background-color:darkblue"><p style="color:white"><style="text-align:center">Amount<p></th>
                
                </tr>
<?php
echo '<h1 style="color:orange"> Databse of ATN Shop 2</h1>';
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
</tr>
";
}
}

?>
</html>               
