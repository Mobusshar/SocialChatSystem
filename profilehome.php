<?php  


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

<h1 style="background-color: orange; color: white;"><?php echo "You are Login as---" ?><?php echo $_SESSION['name']?></h1>



<form method="post" action="sendpost.php" onsubmit="return checkforblank()">
	
	<textarea id="check" name="msg" placeholder="What's on your mind ? ..." class="form-control"></textarea><br>
	<input type="submit" value="Send" >
	<br/>
	<br/>
	

</form>
<form action="uploadpost.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">	
<br/>
<button type="submit" name="submit">UPLOAD</button>

</form>
<br>


</div>
<div class="fileupload">
	<fieldset>

		
<div id="outputmain">
<div class="output">
    <?php 

include 'profiledisplay.php';

    ?>

</div>
</div>
</fieldset>
	

</div>



</body>
</html>