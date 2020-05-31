<?php
    
    include 'hudai.php';
    //session_start();
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
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}


.container {
    padding: 16px;
    background-color: white;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}


hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

a {
    color: dodgerblue;
}

.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="update_user.php" method="post">
  <div class="container">
    <h1>Change User Info</h1>
    
    <hr>

    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
     <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

     <label for="email"><b>Last Name</b></label>
     <input type="text" placeholder="Enter Last Name" name="lname" required>

    <input type="submit" name="confirm" value="Confirm">
  </div>
  
</form>

</body>
</html>
