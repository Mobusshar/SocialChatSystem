<?php
	
	
	if (isset($_SESSION['name'])) {
  
  }
  else{
header("location: login.php");
    
  }
  
  if(isset($_COOKIE['uname']))
  {
        
  }
  else
  {   
    header("location: login.php");
  }
?>

<?php 

	include 'db.php';
	$db = mysqli_connect('localhost', 'root', '', 'mydatabase');

	// initialize variables
	$username = "";
	$email = "";
	$password = "";
	$fname = "";
	$lname = "";
	$type = "";
	$gender = "";

	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$type = $_POST['type'];
		$gender = $_POST['gender'];
		if($type == 1)
		{
			$sql = "INSERT INTO signup (username, email,password,fname,lname,gender,Type) VALUES ('$username', '$email', '$password', '$fname', '$lname', '$gender','Admin')";
		mysqli_query($db,$sql );

		$sql_chat="insert into users_table(user_fname,user_lname,Password) values ('$username','$lname','$password')";
$result1=$conn_chat->query($sql_chat);

		$_SESSION['message'] = "Admin saved"; 
		header('location: addadmin.php');
		}
		else
		{
			$sql = "INSERT INTO signup (username, email,password,fname,lname,gender,Type) VALUES ('$username', '$email', '$password', '$fname', '$lname', '$gender','Moderator')";
		mysqli_query($db,$sql ); 
		$_SESSION['message'] = "Moderator saved"; 
		header('location: addadmin.php');
		}

	}


	

	$results = mysqli_query($db, "SELECT * FROM signup");


?>