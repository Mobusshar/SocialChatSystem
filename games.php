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
<title>Install Games</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Install Games List</h2>
  <ul class="w3-ul w3-hoverable">
    <li>God of War</li>
    <li>Fifa 18</li>
    <li>Overwatch</li>
    <li>The Elder scrolls</li>
    <li>Grand Theft Auto V</li>
    <li>Minecaft</li>
    <li>League of Legends</li>
    <li>Dota 2</li>
  </ul>
</div>
<a href="home.php"> Back
</a><br>
<a href="Home">Home</a>
</body>
</html>
