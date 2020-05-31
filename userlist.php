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
<title>Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
<h2>User List</h2>
<table class="w3-table w3-bordered w3-striped w3-border">
<thead>
<tr class="w3-green">
  <th>First Name</th>
  <th>Last Name</th>
  <th>User Id</th>
</tr>
</thead>
<tr>
  <td>Eman</td>
  <td>Saha</td>
  <td>eman.saha.35</td>
</tr>
<tr>
  <td>David</td>
  <td>Backhum <span class="w3-badge">1</span></td>
  <td>david.94</td>
</tr>
<tr>
  <td>Adam</td>
  <td>Backhum <span class="w3-badge">2</span></td>
  <td>adam.backhum.67</td>
</tr>
<tr>
  <td>Saif</td>
  <td>Uddin</td>
  <td>saif.50</td>
</tr>
<tr>
  <td>Mike</td>
  <td>Ross</td>
  <td>mike.34</td>
</tr>
</table>
</div>
<a href="admin.php"> Back
</a> <br>
<a href="admin.php"> Home
</a>
</body>
</html>
