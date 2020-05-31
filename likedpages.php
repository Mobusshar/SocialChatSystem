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
* {
    box-sizing: border-box;
}


.column {
    float: left;
    width: 25%;
    padding: 10px;
    height: 300px; 
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

.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<h2>Liked pages</h2>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Coca-Cola</h2>
    <p>Coca-Cola has secured their spot at the top of many best-of-the-best Facebook page lists due to their innovative promotions and fun, interactive features.

Their latest promotion is the Summer Snapshot contest, where they encourage their fans to take photos with the summer Coca-Cola cans. Not only does this get fans involved with their page, but the contest also incorporates photos of their products with fans.</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Oreo</h2>
    <p>Oreo does a fantastic job of creating unique experiences for their fans. Oreo knows that their cookies have been part of many people’s lives since childhood and they use this angle to create nostalgia with their fans. And it’s working for them because they have over 8 million fans to date!
</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>The Twilight Saga</h2>
    <p>No matter if you have seen the movies or not, you can’t deny that the Twilight Saga is hot. There are two strategies they’ve launched on their Facebook page that you can model for your own page.

First, they’ve created a “Tweet Sweeps,” where they encourage fans to tweet about the movies for a chance to win movie tickets. The best strategy with this type of contest is to tell fans specifically what to tweet so there is no confusion and they can take action quickly. Check out how they’ve done this in the image below:

twilight tweet sweeps

</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Travel Channel</h2>
    <p>The Travel Channel has done something unique on their page that’s worth checking out. They’ve created a space for their fans to share how Facebook has played a part in their travel experiences. You can post your own story or just read what others have posted. It’s a creative way to get people with similar interests to engage with your page.</p>
  </div>
</div>
</br>
<a href="home.php">
    <input type="submit" value="Back">
</a>
<a href="home.php">
    <input type="submit" value="Home">
</a>
</body>
</html>
