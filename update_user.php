<?php
session_start();
include 'dbh.php';
$username = $_SESSION['name'];

$name = $_POST['name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];


$query= "UPDATE signup
SET username = '$name',email = '$email', password = '$pwd',  fname = '$fname', lname = '$lname'
WHERE username = '$username'";
$result= mysqli_query($conn,$query);

if(!$result){
	die("Failed".mysqli_error($conn));
}
header("location: Home.php");


?>