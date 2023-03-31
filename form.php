<!DOCTYPE html>
<html lang="en">
<head>
	<title>Voter Details</title>
</head>
<body>
	<center>
		<h1>Voter Details</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="Name">Name:</label>
			<input type="text" name="name" id="Name">
			</p>

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>

<p>
			<label for="Moblie">Moblie Number:</label>
			<input type="number" maxlength="10" name="mobile">
			</p>			
			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

<p>
			<label for="Aadhar">Aadhar Number:</label>
			<input type="number" maxlength="12"  name="aadhar">
			</p>
			
<p>
			<label for="VoterId">VoterId Number:</label>
			<input type="text"   name="voterid">
			</p>	
			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
