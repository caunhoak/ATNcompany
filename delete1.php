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
$productid=$_GET['id'];
$query = "DELETE FROM shop1 WHERE productid = '$productid'";
$data = pg_query($pg_conn,$query);
if($data)
{
 echo "<script>alert('Delete Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://tannd.herokuapp.com/shop1.php" />
<?php
}
else
{
 echo "Failed to delete.";
}
?>
