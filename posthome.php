<?php  


if (isset($_SESSION['name'])) {
  
  }
  else{
header("location: login.php");
    
  }
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
    <script type="text/javascript" src="js/jquery-3.1.js"></script>
    <script type="text/javascript" src="js/homejquery.js"></script>
    <script type="text/javascript" src="js/emptycheck.js"></script>

</head>
<body>
<div id="main">

<h1 style="background-color: black; color: white;"><?php echo "You are Logged in as--" ?><?php echo $_SESSION['name']?></h1>



<form method="post" action="homesendpost.php" onsubmit="return checkforblank()">
	
	<textarea id="check" name="msg" placeholder="WHAT'S ON YOUR MIMD ....??.." class="form-control"></textarea><br>
	<input type="submit" value="UPDATE STATUS" >
	<br/>
	<br/>
	

</form>
<form action="homeuploadpost.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">	
<br/>
<button type="submit" name="submit">UPLOAD IMAGE</button>

</form>
<br>


</div>
<div class="fileupload">
	<fieldset>

		
<div id="outputmain">
<div class="output">
    <?php 

include 'postdisplay.php';

    ?>

</div>
</div>
</fieldset>
	

</div>



</body>
</html>