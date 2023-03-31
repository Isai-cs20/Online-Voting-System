<!DOCTYPE html>
<html lang="en">
<head>
	<title>User</title>
</head>
<body>
	<center>
		<h1>Username and Password</h1>
		<form action="register.php" method="post">

<p>
			<label for="Id">Id:</label>
			<input type="number" name="id" >
			</p>

			
<p>
			<label for="Name">Name:</label>
			<input type="text" name="name" id="Name">
			</p>

<p>
			<label for="UserName">UserName:</label>
			<input type="text" name="username" >
			</p>

			
<p>
			<label for="Password">Password:</label>
			<input type="password" name="password">
             </p>

<p>
			<label for="Type">Type:</label>
			<input type="number" name="type"  min="2" max="2">
			</p>


			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
