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
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

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

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Reply</h3>


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<a href="userfrndlist.php">
    <input type="submit" value="Send">
</a>
  </form>
</div>
<a href="userfrndlist.php">
    <input type="submit" value="Back">
</a>
<a href="home.php">
    <input type="submit" value="Home">
</a>

</body>
</html>
