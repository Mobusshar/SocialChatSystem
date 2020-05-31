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
    background-color: lightblue;
    margin: 0 auto;
    max-width: 800px;
    padding: 0 20px;
}

.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}

.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}
</style>
</head>
<body>

<h2>Notifications</h2>

<div class="container darker">
  <img src="trump.png"  style="width:100%;">
  <p>Donal Trump and 64 others like your photo.</p>
  <span class="time-right">1hour ago</span>
</div>

<div class="container darker">
  <img src="lukakupic.png"  style="width:100%;">
  
<p>Lukaku invited you to like Mitonmoy Games.</p>
  <span class="time-right">3hours ago.</span>
</div>

<div class="container darker">
  <img src="ronaldo.png" alt="Avatar" style="width:100%;">
 <p>Ronaldo was live</p>
  <span class="time-right">7 hours ago.</span>
</div>

<div class="container darker">
  <img src="mark.png" alt="Avatar" style="width:100%;">
  <p>Mark comment on your phpto.</p>
  <span class="time-right">14 hours ago</span>
</div>

<a href="home.php">
    <input type="submit" name="" value="Back">
</a> 
</br>
<a href="home.php">
    <input type="submit" name="" value="Home">
</a>
<a href="login.php">
    <input type="submit" name="" value="Logout">
</a>
</body>
</html>
