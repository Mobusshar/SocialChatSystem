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

<?php 
include 'server.php';
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM signup WHERE uid=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$username = $n['username'];
			$email = $n['email'];

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
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM signup"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email Address</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['email']; ?></td>
			
      <td>
        
      <td>
        <a href="server.php?del=<?php echo $row['uid']; ?>" class="del_btn">Delete User</a>
      </td>
			
		</tr>
	<?php } ?>
</table>
	


<form method="post" action="server.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	
	<!-- <div class="input-group">
    <label>Name</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
  </div>
  <div class="input-group">
    <label>Email Address</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="input-group"> -->

    <?php if ($update == true): ?>
      <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
     
    <?php endif ?>
  </div>
		
	
	<center>
		<a href="admin.php">Home</a><br><br>
		<a href="logout.php">Logout</a>
	</center>
	
		
</form>
</body>
</html>