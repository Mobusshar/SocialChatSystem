<?php
  
    session_start();
	session_unset();
	session_destroy();
	
	if(isset($_COOKIE['uname']) && isset($_COOKIE['pass'])) {
		$username = $_COOKIE['uname'];
		$password = $_COOKIE['pass'];
		setcookie('uname',$username,time()-1,"/");
		setcookie('pass',$password,time()-1,"/");
		header("location: login.php");
	}
	else

	echo "<script>
	location.replace(\"http://localhost/Home/login.php\");
	</script>";
	
?>