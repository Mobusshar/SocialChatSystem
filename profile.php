<?php

session_start();
include 'dbh.php';

if (isset($_SESSION['name'])) {
  
  }
  else{
header("location: login.php");
    
  }

  if (isset($_POST['upload'])) {
   
  }

  if(isset($_COOKIE['uname']))
  {
 
  }
  else
  {   
    header("location: login.php");
  }

  $username=$_COOKIE['uname'];


  
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
  
  <link rel="stylesheet" href="profilestyle.css" >
  
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  
  
  
  <title> Profile </title>
  </head>
  <body>
    <header>
      <div class="total">
  <div class="fixed">
    <div class = "container">
        
       <ul>
     
         <li><a href = "Home.php"> Home </a> </li>
           <!-- <li><a href = "profileuserfrndlist.php"> Friends </a> </li>     
         <li><a href = "photos.php"> Photo </a> </li>
       <li><a href = "profilefrndrequest.php"> Friend Request </a> </li> -->     
         <li><a href = "login.php"> Logout </a> </li>
     
     
         </ul>     
    </div> 
    </header>
  <div class = "transparent">
     
      <div class="all-upload">  
      <div class = "upload">  
     
   
  
      </div>
        </div>
    <br><br>
    
      <img class="circleimage" src="<?php 


if ($result->num_rows > 0 ) {
  while ($row = $result->fetch_assoc()) {
    if ($row["prof_image"] == "") {
          echo "<br/><div style='border:1px;border-radius:5px;background-color:blue;color:white;width:40%;padding:40px'>"."" . $row["name"]. " " . " : ". $row["msg"]."   -   " .$row["date"]."</div><br>";
    echo "<br>";

    }else {

    echo "<br/>"."" . $row["name"]. " " . "   -   " .$row["date"]."<br>"."<br>";
    echo "<td><div style='border:1px;padding:20px;background-color:gray;width:45%'>";?> <img src="<?php echo $row["image_chat"]; ?>"  height="250" width="250" style="border-radius:20px"> <?php echo "</div></td>";
    echo "<br>";

}
    
  }

}


       ?>" >

       <div id="profilepic">

<form action="uploadprofile.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"> 
<br/>
<button type="submit" name="submit">Upload profile picture</button>

</form>


  
</div>
    <div class="name">
    <h1 style="color: blue"> <font color=#b3b3b3></font></h1>
    </div>
    <div class="add">
    <!-- <img class="af" src="addfriend.png"> -->


    
    </div>
    
    <div class="icon">
      <!-- <a href="www.facebook.com">
      <img class="icons" src="fb.png">
    </a> -->
  <!--   <img class="icons" src="insta.png">
      <img class="icons" src="twitter.png">
    <img class="icons" src="snap.png"> -->
  
      </div>
    <div class = "uploads">
    <h1><font color=#b3b3b3></font></h1>
    <p>   <form method="POST" action="profile.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
   
    <div>
      
    </div>
    <div>
      
  </div>
</form> </p>

    <?php

    include 'profilehome.php';

      ?>




    </div>
    
  </div>
</div>
  

  </body>
</div>

  
  
</html>