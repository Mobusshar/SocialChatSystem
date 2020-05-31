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
	
	session_start();
include 'dbh.php';

$type = "";

	if(isset($_POST['submit']))
	{

		$username = $_POST['uname'];
		$password = $_POST['pass'];
		
		
		if($username == "" || $password == ""){

			echo "invalid submission";
			header("location: login.php?status=nullvalue");

		}
		else
		{


			$sql = "SELECT * FROM signup WHERE username='$username' AND password='$password'";

			$result=$conn->query($sql);

			if (!$row = $result->fetch_assoc()) 
			{
					header("Location:login.php?status=invaliduser");
	
			}
			else
			{
				$type = $row['Type'];

				$_SESSION['name']=$_POST['uname'];

				if(isset($_POST['remember'])) 
				{

                    switch ($type)
                    {
                        case 'Admin':
                            {
                                
                                setcookie('uname',$username,time()+10,"/");
								setcookie('pass',$password,time()+10,"/");
								header("location: admin.php");
								break;
                            }

                        case 'User':
                            {
                                
                                setcookie('uname',$username,time()+10,"/");
								setcookie('pass',$password,time()+10,"/");
								header("location: Home.php");
								break;
                            }
                        case 'Moderator':
                        	{
                        		setcookie('uname',$username,time()+10,"/");
								setcookie('pass',$password,time()+10,"/");
								header("location: moderator.php");
								break;
                        	}
                        	
                    }
					
				}
				else
				{
					switch ($type)
                    {
                        case 'Admin':
                            {
                                setcookie('uname','pass',time()+3600,"/");
								header("location: admin.php");
								break;
                            }

                        case 'User':
                            {
                                setcookie('uname','pass',time()+3600,"/");
								header("location: Home.php");
								break;
                            }

                        case 'Moderator':
                        	{
                        		setcookie('uname','pass',time()+3600,"/");
								header("location: moderator.php");
								break;
                        	}
                    }
					
				}
				
			}
			
		}
	}

?>