<?php 
session_start();
include 'dbh.php';

$name=$_SESSION['name'];

if (isset($_POST['submit'])) {

$file = $_FILES['file'];


$fileName = $_FILES['file']['name']	;

$fileTmpName = $_FILES['file']['tmp_name']	;

$fileSize = $_FILES['file']['size']	;

$fileError = $_FILES['file']['error']	;

$fileType = $_FILES['file']['type']	;

$fileExt = explode('.', $fileName );

$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg' ,'jpeg' ,'png' , 'gif');

if (in_array($fileActualExt, $allowed)) {
	
if ($fileError === 0) {
	if ($fileSize < 90000000) {
		$fileNameNew = uniqid('',true).".".$fileActualExt;
		$fileDestination = 'uploads/homepost/'.$fileNameNew;
		move_uploaded_file($fileTmpName, $fileDestination);
//$fileShow = $fileDestination;

//$fileShow = $_FILES['file']['name'];

$sql = "insert into homepost(name,image_chat) values ('$name','$fileDestination')";

$result=$conn->query($sql);



		header("Location: Home.php");
	}else{

echo "<script> alert('Your file is too big ! ');</script>";

	}

}else{

echo "<script> alert ('there is an error uploading your file ');</script>";

}


}else{

	echo "<script> alert ('You cannot upload this type of files');</script>";
}
}
 ?>