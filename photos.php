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
<style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>

<div class="gallery">
  <a target="_blank" href="lukaku1.jpg">
    <img src="lukaku1.jpg"  width="600" height="400">
  </a>
  <div class="desc">Uploaded date: 18-03-2018</div>
</div>

<div class="gallery">
  <a target="_blank" href="lukaku2.jpg">
    <img src="lukaku2.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Uploaded date: 08-03-2018</div>
</div>

<div class="gallery">
  <a target="_blank" href="lukaku3.jpg">
    <img src="lukaku3.jpg"  width="600" height="400">
  </a>
  <div class="desc">Uploaded date: 13-04-2018</div>
</div>

<div class="gallery">
  <a target="_blank" href="lukaku4.jpg">
    <img src="lukaku4.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Uploaded date: 18-03-2018</div>
</div>

</body>
<div>
<a href="profile.php">
  <input type="submit" value="Back">
</a>

<a href="home.php">
  <input type="submit" value="Home">
</a>
<a href="login.php">
  <input type="submit" value="Logout">
</a>
</div>
</html>
