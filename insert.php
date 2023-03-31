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
		$conn = mysqli_connect("localhost", "root", "", "voter_details");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$gender = $_REQUEST['gender'];
		$mobile = $_REQUEST['mobile'];
		$address = $_REQUEST['address'];
		$aadhar = $_REQUEST['aadhar'];
		$voterid = $_REQUEST['voterid'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO voter VALUES ('$name',
			'$gender','$mobile','$address','$aadhar','$voterid','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Voter Details stored successfully."
				. " Please Verify your Details"
				. " For Further Process</h3>";

			echo nl2br("\n$name\n$mobile\n"
				. "$gender\n $address\n$aadhar\n$voterid\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center><br>
	<center>
	<button onclick="window.location.href='http://localhost/userpass';">
      Next
    </button>
	</center>
</body>

</html>
