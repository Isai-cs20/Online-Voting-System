<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "voting_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
		$username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $type = $_REQUEST['type'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('$id','$name',
			'$username','$password','$type')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Username and Password Created successfully."
				. " Please use it For Further Process</h3>";
				
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center><br>
	<center>
	<button onclick="window.location.href='http://localhost/login.php';">
      Back To Home Page
    </button>
	</center>
</body>

</html>
