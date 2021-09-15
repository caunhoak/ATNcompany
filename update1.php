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
$id=$_GET['id'];
$n=$_GET['n'];
$p=$_GET['p'];
$am=$_GET['am'];
?>
<html>
 <head>
 <title> Update </title>
 </head>
 <body>
<style>
 body {
 background-image: url('update1.jpeg');
 background-attachment: fixed;
   background-size: 100%100%;
 }
 </style>
 <br>
 <form action="" method="GET">
 <table border"0" bgcolor="yellow" align="center" cellspacing="20">

 <tr>
 <td>Product ID</td>
 <td><input type="text" value="<?php echo "$id" ?>" name="productid" required></td>
 </tr>

 <tr>
 <td>Product Name</td>
 <td><input type="text" value="<?php echo "$n" ?>" name="productname" required></td>
 </tr>

 <tr>
 <td>Product Price</td>
 <td><input type="text" value="<?php echo "$p" ?>" name="productprice" required></td>
 </tr>

 <tr>
 <td>Amount</td>
 <td><input type="text" value="<?php echo "$am" ?>" name="amount" required></td>
 </tr>

 <tr>
 <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update"></td>
 </tr>
 </form>
 </table>
</body>
</html>
<?php
if($_GET['submit'])
{
$productid = $_GET['productid'];
$productname = $_GET['productname'];
$productprice = $_GET['productprice'];
$amount = $_GET['amount'];
  $query = "UPDATE shop1 SET productid='$productid', productname='$productname', productprice='$productprice', amount='$amount' WHERE productid='$productid' ";
$data = pg_query($pg_conn,$query);
if($data)
{
echo "<script>alert('Updated Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://tannd.herokuapp.com/shop1.php">
<?php
}
else
{
echo "Failed to update the table.";
}
}
?>
