<?php
	$u=0;
	$p=0;
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid user info! try again...";
		}else if($status == "nullvalue"){
			echo "Username/password can't be empty";
		}
	}
	elseif (isset($_COOKIE['uname']) && isset($_COOKIE['pass'])) {
		$username = $_COOKIE['uname'];
		$password = $_COOKIE['pass'];
		
		$u=1;
		$p=1;

		echo "<script>
		location.replace(\"http://localhost/Home/Home.php\");
		</script>";
	}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginc.css">
	<script type="text/javascript" src="js/jquery-3.1.js"></script>
    <script type="text/javascript" src="js/homejquery.js"></script>
    <script type="text/javascript" src="js/emptycheck.js"></script>



<body>

	<form method="post" action="loginCheck.php" onsubmit="return checkforblank()">
	<div class="loginbox">
	<img src="loginlogo.png"  class="loginform">
	<h1>Login Here</h1>
		<form>
			<p>Username</p>
			<input type="text" id="username" name="uname" placeholder="Enter Username" value="<?php if($u==1) echo $username; ?>">
			<p> Password <p>
			<input type="Password" id="password" name="pass" placeholder="Enter Password" value="<?php if($p==1) echo $password; ?>">
			<input type="checkbox" name="remember" value="1">Remember me
			<input type="submit" name="submit" value="Login">	<br>

			<a href="ForgotPassword.php">Forgot your pasword?</a><br><br>
			<a href="CreateAccount.php">Don't have any account? </a>

		</form>
	</div>


</body>
</head>
</html>