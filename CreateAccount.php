<!DOCTYPE html>
<html>
<head>
	<title>Create An Account</title>
	<link rel="stylesheet" type="text/css" href="CreateAccount.css">

<body>
		<form method="post" action="CreateAccountCheck.php">
			<div class="createAccountform">
			<p>First Name
			<input type="text" name="firstname" placeholder="First Name"><br></p>
			<p>Last Name
			<input type="text" name="lastname" placeholder="Last Name"><br></p>
			<p>Email
			<input type="text" name="Email" placeholder="Email"><br> </p>
			<p>User Name
			<input type="text" name="uname" placeholder="Username"><br></p>
			<p>Password
			<input type="Password" name="Password" placeholder="Password (6 or more characters)" pattern=".{6,}" title="Must contain at least 6 or more characters" required><br></p>
			<p>Retype Password
			<input type="Password" name="retypepassword" placeholder="Re-enter Password" pattern=".{6,}" title="Password doesn't match" required> <br></p>
			<input type="radio" name="gender" value="Male"> Male<br>
			<input type="radio" name="gender" value="Female"> Female<br>
			<input type="radio" name="gender" value="Others"> Others<br>
			
			<input type="submit" name="submit" value="Signup">	<br>
		</div>
	</form>

</body>
</head>
</html>