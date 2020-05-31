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
div {
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
}
</style>
</head>
<body>

<h2>Birthday:</h2>
<p>one event today</p>
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
	input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

</style>
<img src="lukakupic.png" width="350" height="263" align="center">
<div>Romelu Menama Lukaku Bolingoli is a Belgian professional footballer who plays as a striker for English club Manchester United and the Belgium national team. Wikipedia
Born: May 13, 1993 (age 25 years), Antwerp, Belgium
Height: 1.91 m
Weight: 94 kg
Current teams: Belgium national football team (#9 / Forward), Manchester United F.C. (#9 / Forward)</div>


<a href="home.php">
    <input type="submit" value="Back">
</a>
<a href="home.php">
    <input type="submit" value="Home">
</a>
</body>
</html>
