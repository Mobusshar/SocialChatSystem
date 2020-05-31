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

	<title>BDAPP</title>
	<link rel="stylesheet" type="text/css" href="home.css"/>
	<style type="text/css">
  
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
    background-color: white;
   }
  
</style>

    


</head>
<body>

	<div class="header1">
		<div id="img3" class="header1"><img src=""/></div>
		<div id="searcharea" class="header1"><input type="text" placeholder="search" id="searchbox"/></div>
		<div id="profilearea" class="header1"><a href="profile.php"><img src="profile.png"/></a></div>
		<div id="profilearea1" class="header1"><a href="profile.php">Profile</a></div>
		<div id="profilearea2" class="header1">|</div>
		<div id="profilearea3" class="header1"><a href="Home.php">Home</a></div>
		<!-- <a href="userfrndlist.php">
			<div id="findf" class="header1"><img src="frn.jpg"/></div>
		</a> -->

		<a href="chatindex.php">
			<div id="message" class="header1"><img src="chat.png"/></div>
		</a>
		<!-- <a href="notification.php">	
			<div id="notification" class="header1"><img src="noti.png"/></div>
		</a>	 -->
		<div id="profilearea4" class="header1">|</div>
	<a href="settings.php">	
		<div id="setting" class="header1"><img src="set.png"/></div>
	</a>	
		<div id="logout" class="header1"><a href="logout.php"><img src="log.png"/></a></div>
	</div>

	<div class="bodyn">
		<div id="side1" class="bodyn"><img src="profile.png"/><a href="profile.php">Profile</a></div>
		<div id="side2" class="bodyn"><a href="settings.php">Edit Profile</div>
	<a href="home.php">		
		<div id="side3" class="bodyn">News Feed</div>
	</a>	
	<a href="chatindex.php">	
		<div id="side4" class="bodyn">Messages</div>
	</a>	
	<!-- <a href="event.php">
		<div id="side5" class="bodyn">Events</div>
	</a>	
		<div id="side6" class="bodyn">PAGES</div>
	<a href="likedpages.php">	
		<div id="side8" class="bodyn">Liked Pages</div>
	</a>	
		<div id="side11" class="bodyn">GROUPS</div> -->
	<a href="groupmsg.php">
		<div id="side5" class="bodyn">Group Message</div>
	</a>
		<!-- <div id="side14" class="bodyn">APPS</div>
	<a href="games.php">	
		<div id="side16" class="bodyn">Games</div>
	</a> -->	

	<!-- <a href="frndrequest.php">	
		<div id="side17" class="bodyn">Friend Request</div>
	</a> -->
		
	</div>

		<div class="post7">

		

</body>
<body>
	
</body>
</html>