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

<h2>Group Messages</h2>

<div class="container">
  <img src="login.jpeg"  style="width:100%;">
  <p>Hello. How are you today? Tonmoy.</p>
 <a href="replygroup.php">
    <input type="submit" value="Reply">
</a>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="tnm.jpg" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <a href="replygroup.php">
    <input type="submit" value="Reply">
</a> 
  <span class="time-right">11:01</span>
</div>

<div class="container">
  <img src="login.jpeg" style="width:100%;">
  <p>What's the plan today??</p>
  <a href="replygroup.php">
    <input type="submit" value="Reply">
</a>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="tnm.jpg"  style="width:100%;">
  <p>No plan.Today i have a project of WEB TECHNOLOGY.</p>
 <a href="replygroup.php">
    <input type="submit" value="Reply">
</a> 
  <span class="time-right">11:05</span>
</div>

<a href="home.php">
    <input type="submit" value="Back">
</a>
</body>
</html>
