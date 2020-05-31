<?php
  
  if(isset($_COOKIE['uname']))
  {
        
  }
  else
  {   
    header("location: login.php");
  }
?>

<?php 

include 'hudai.php';
include('server.php');
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM signup WHERE uid=$id");

    if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $username = $n['username'];
      $email = $n['email'];
      $joining_date= $n['joining_datei'];
      $fname=$n['fname'];
      $lname=$n['lname'];

    }

  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>User List </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div id="color1">
  <?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
      <?php 
        echo $_SESSION['message']; 
        unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM signup"); ?>

<div id="color1">

<h3> Friend List </h3>



<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Address</th>
      <th>Joining Date</th>
      <th>Gender</th>
      <th>First Name</th>
      <th>Last Name</th>

      
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['joining_date']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      
    </tr>
  <?php } ?>
</table>

  


<form method="post" action="server.php" >

  <input type="hidden" name="id" value="<?php echo $id; ?>">

  
  
  </div>
</form>

</body>
</html>