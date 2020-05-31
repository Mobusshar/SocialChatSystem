<?php


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


include 'dbh.php';
 $sql = "SELECT * FROM posts";
    $result = $conn->query($sql);

if ($result->num_rows > 0 ) {
	while ($row = $result->fetch_assoc()) {
		if ($row["image_chat"] == "") {
					echo "<br/><div style='border:1px;border-radius:5px;background-color:blue;color:white;width:40%;padding:10px'>"."" . $row["name"]. " " . " : ". $row["msg"]."   -   " .$row["date"]."</div><br>";
		echo "<br>";

		}else {

		echo "<br/>"."" . $row["name"]. " " . "   -   " .$row["date"]."<br>"."<br>";
		echo "<td><div style='border:1px;padding:10px;background-color:gray;width:15%'>";?> <img src="<?php echo $row["image_chat"]; ?>"  height="250" width="250" style="border-radius:20px"> <?php echo "</div></td>";
		echo "<br>";

}
		
	}

}else{

	echo "0 results";
}
$conn->close();

    ?>	