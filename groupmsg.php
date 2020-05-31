<?php  
session_start();
include 'dbh.php';

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
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="groupmsg.css">
    <script type="text/javascript" src="js/jquery-3.1.js"></script>
    <script type="text/javascript" src="js/homejquery.js"></script>
    <script type="text/javascript" src="js/emptycheck.js"></script>

</head>
<body>
<div id="main">

<h1 style="background-color: #585687; color: white;"><?php echo $_SESSION['name'] ?> - You're ONLINE </h1>
<div id="outputmain">
<div class="output">
    <?php 

include 'groupmsgshow.php';

    ?>

</div>
</div>


<form method="post" action="groupmsgsend.php" onsubmit="return checkforblank()">
	
	<textarea id="check" name="msg" placeholder="Type to send message ......" class="form-control"></textarea><br>
	<input type="submit" value="Send" >
	<br/>
	
	
</form>
<br>

<form action="Home.php">
	<input style="width: 100%; background-color: #6495ed; color: white; font-size: 20px; "type="submit" value="Home">

</form>
<form action="logout.php">
	<input style="width: 100%; background-color: #6495ed; color: white; font-size: 20px; "type="submit" value="Logout">

</form>


</div>
<div class="fileupload">
	<fieldset>

		<form action="groupmsgupload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">	
<br/>
<button type="submit" name="submit">UPLOAD</button>

</form>

</fieldset>
	

</div>



</body>
</html>