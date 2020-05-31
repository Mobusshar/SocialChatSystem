<!DOCTYPE html>
<html>
<head>
	<title>Create An Account</title>
	<link rel="stylesheet" type="text/css" href="ForgotPassword.css">

<body>
	<form method="post" action="ForgotPasswordCheck.php">
		<div class="ForgotPasswordForm">
		<h4> Let's Find your Account </h4>
		<p>Please enter your user name or email</p>
		<div class="searchBox">
			<form action="search.php" method="GET" id="search">
				<input type="text" name="Email" size="100" placeholder="Enter your Username or Email...">
			</form>
		</div>
			<input type="submit" name="submit" value="submit">	<br>
		</div>

</body>
</head>
</html>