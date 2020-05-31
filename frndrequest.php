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
    background-color: orange;
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

<h2>Friend Requests</h2>

<div class="container darker">
  <img src="trump.png"  style="width:100%;">
  <h3>Donald John Trump</h3>
 <button type="button" onclick="alert('You are now friend with Trump.')">Accept</button>
  <span class="time-right">11 metual friends</span>
</div>

<div class="container darker">
  <img src="lukakupic.png"  style="width:100%;">
  <h3>Lukaku</h3>
 <button type="button" onclick="alert('You are now friend with Lukaku.')">Accept</button>
  <span class="time-right">17 metual friends</span>
</div>

<div class="container darker">
  <img src="ronaldo.png" alt="Avatar" style="width:100%;">
  <h3>Ronaldo</h3>
 <button type="button" onclick="alert('You are now friend with Ronaldo.')">Accept</button>
  <span class="time-right">7 metual friend.</span>
</div>

<div class="container darker">
  <img src="mark.png" alt="Avatar" style="width:100%;">
  <h3>Mark</h3>
<button type="button" onclick="alert('You are now friend with Mark.')">Accept</button>
  <span class="time-right">14 metual friend.</span>
</div>

<a href="home.php"> Back</a>
</body>
</html>
