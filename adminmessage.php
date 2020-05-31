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

<h2>Chat Messages</h2>

<div class="container darker">
  <img src="trump.png"  style="width:100%;">
  <h3>Trump</h3>
  <p3>Hello. How are you today?</p3>

  <a href="replyadmin.php">
    <input type="submit" value="Reply">
</a>
  <span class="time-right">11:00pm</span>
</div>

<div class="container darker">
  <img src="lukakupic.png"  style="width:100%; ">
  <h3>Lukaku</h3>
  <p3>Hey! What's up?</p3>
  <a href="replyadmin.php">
    <input type="submit" value="Reply">
</a>
  <span class="time-right">12:01am</span>
</div>

<div class="container darker">
  <img src="ronaldo.png" alt="Avatar" style="width:100%;">
  <h3>Ronaldo</h3>
  <p3>what do you wanna do today?</p3>
  <a href="replyadmin.php">
    <input type="submit" value="Reply">
</a>
  <span class="time-right">09:02am</span>
</div>

<div class="container darker">
  <img src="mark.png" alt="Avatar" style="width:100%;">
  <h3>Mark</h3>
  <p3>Add me. </p3>
  <a href="replyadmin.php">
    <input type="submit" value="Reply">
</a>
  <span class="time-right">11:05am</span>
</div>
<a href="admin.php">
    <input type="submit" value="Back">
</a>
<a href="admin.php">
    <input type="submit" value="Home">
</a>
<a href="login.php">
    <input type="submit" value="Logout">
</a>

</body>
</html>
