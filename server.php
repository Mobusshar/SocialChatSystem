<?php


//session_start();
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
	
	$db = mysqli_connect('localhost', 'root', '', 'mydatabase');

	// initialize variables
	$username = "";
	$email = "";
	$id = 0;
	$update = false;

	if (isset($_POST['find'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];

		mysqli_query($db, "select name from signup"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}


	

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM signup WHERE uid='$id'");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}


	$results = mysqli_query($db, "SELECT * FROM signup");


?>