<html>
<head>
 <ul>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<a href="index.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 </ul>
	<style>
		h1 {
  color: red;
  font-family: Arial;
  font-size: 300%;
  text-align: center;			

}
	</style>	
	<h1> Welcome to Admin ATN </h1>
	 <style>
 body {
 background-image: url('admin.jpg');
 background-attachment: fixed;
 background-size: 100%100%;
 }
 </style>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>	
<body>

<div class="dropdown" style="float:left;">
  <button class="dropbtn">Choose</button>
  <div class="dropdown-content" style="left:0;">
  <a href="https://datpt.herokuapp.com/displayshop1.php">Shop 1</a>
  <a href="https://datpt.herokuapp.com/displayshop2.php">Shop 2</a>
  <a href="https://datpt.herokuapp.com/displayallshop.php">All </a>
  </div>
</div>

</body>
</html>
