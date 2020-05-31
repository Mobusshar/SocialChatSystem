<?php

  session_start();
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

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <!-- <a href="#news">News</a> -->
  <a href="index.php">User List</a>
  <!-- <a href="noticeboardadmin.php">Notice</a> -->
  <a href="addadmin.php">Admin Panel</a>
  <a href="adminchatindex.php">Messages</a>
</div>

<div style="padding-left:16px">
  <h2>This is admin page...</h2>
  
</div>
<center>
  <a href="logout.php">Logout</a>
</center>

</body>
</html>
