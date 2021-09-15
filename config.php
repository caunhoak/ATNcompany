<?php 
		
		$host_heroku = "ec2-3-219-111-26.compute-1.amazonaws.com";
		$db_heroku = "deohem0songcaa";
		$user_heroku = "qpcmfaakpjjjps";
		$pw_heroku = "eeee2b3fbe5ff9b98515af186beeeb5b2b9bddb7f2aa4ea266abef44059990ff";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
			# Get data by query
			$result = pg_query($pg_conn, "select * from users;");
			#var_dump(pg_fetch_all($result));
			
			$numrows = pg_num_rows($result)
		?>
