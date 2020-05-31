<?php
	
	$key 	= $_GET['value'];

	$con = mysqli_connect('localhost', 'root', '', 'mydatabase');
	$sql = "select username from signup where username like '".$key."%'";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	echo "<i onclick='setValue(\"".$row['username']."\")' style='color:black'>".$row['username']."</i>";

?>