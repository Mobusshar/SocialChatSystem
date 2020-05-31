<?php

  session_start();

if (isset($_SESSION['name'])) {

  if(isset($_GET['added']))
  {
    if($_GET['added']==="true")
    {
      echo "<script>alert('Slangs added');</script>";
    }
    else
    {
      echo "<script>alert('some error occured');</script>";
    }
  }
  
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

  <a href="moderatorindex.php">User List</a>

</div>

<div style="padding-left:16px">
  <h2>This is moderator page...</h2>
  
</div>
<center>
  <a href="logout.php">Logout</a>
</center>
<form action="addSlang.php" method="POST" >
<input type="text" name="ct" placeholder="Catagory" style="padding: 10px" required><br/><br/>
<input type="text" name="t1"  placeholder="Word" style="padding: 10px"  required><br/><br/>
<input type="text" name="t2" placeholder="Word" style="padding: 10px"  required><br/><br/>
<input type="text" name="t3"  placeholder="Word" style="padding: 10px"><br/><br/>
<input type="text" name="t4"  placeholder="Word" style="padding: 10px"><br/><br/>
 <input type="submit" name="submit" value="Add Slang">
</form>
</body>
</html>
