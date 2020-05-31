<!-- <?php
  
  if(isset($_COOKIE['uname']))
  {
        
  }
  else
  {   
  //  header("location: login.php");
  }
?> -->

<?php

include 'dbh.php';
include 'db.php';

        $firstname =trim( $_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$email = trim($_POST['Email']);
		$uname = trim($_POST['uname']);
		$pass = trim($_POST['Password']);
		$retypepassword = trim($_POST['retypepassword']);
		$gender   = trim($_POST['gender']);
		$valid = 0;
		$passErr=0;
		$emailErr=0;


	if(isset($_POST['submit'])){

		
			if($firstname == "" || $lastname == "" || $email == "" || $uname == "" || $pass == "" || $retypepassword == "" || $gender == ""){

			//echo "invalid submission";
			header("location: CreateAccount.php");

		}else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$valid=1;
				$emailErr =1;
			}
			if(strcmp($pass, $retypepassword)!==0)
			{
			 	$valid = 1;
			 	$passErr=1;

			}

		}	
		if($valid == 0){
			$sql = "insert into signup(username,email,password,fname,lname,gender,Type) values ('$uname','$email','$pass','$firstname','$lastname','$gender','User')";

			$result=$conn->query($sql);

			$sql_chat="insert into users_table(user_fname,user_lname,Password) values ('$uname','$lastname','$pass')";
			$result1=$conn_chat->query($sql_chat);

						header("location: login.php?val=0");

		}else{
			//header("location: CreateAccount.php?val=1");
			if($passErr==1&& $emailErr==1){
			echo "<script>
					alert('Password and email Error');
					window.location.href='CreateAccount.php';
				 </script>";
				}
			else if($passErr==1){
				echo "<script>
					alert('Password  Error');
					window.location.href='CreateAccount.php';
				 </script>";
			}else if($emailErr==1){
				echo "<script>
					alert(' email Error');
					window.location.href='CreateAccount.php';
				 </script>";
			}
			
			

		}
		
	}	
?>