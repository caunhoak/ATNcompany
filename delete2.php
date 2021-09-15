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
$productid=$_GET['id'];
$query = "DELETE FROM shop2 WHERE productid = '$productid'";
$data = pg_query($pg_conn,$query);
if($data)
{
 echo "<script>alert('Delete Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://datpt.herokuapp.com/shop2.php" />
<?php
}
else
{
 echo "Failed to delete.";
}
?>
