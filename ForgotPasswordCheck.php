<?php
require_once('phpMailer/PHPMailerAutoload.php');
$email=$_POST['Email'];
include 'dbh.php';
$sql="SELECT * from signup where email='$email'";
$result1=mysqli_query($conn,$sql);
if(!$result1)
{
	die("query failed".mysqli_error($conn));
}
if (mysqli_num_rows($result1) > 0) {
    
				while($row = mysqli_fetch_assoc($result1)) {
					$pass = $row['password'];
					$name = $row['username'];
				}
			} else{
				header('location:login.php');
		echo "<script>
				alert('Incorrect Error');
			</script>";
			}
$mail = new PHPMailer(true);
$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isHTML(true);// Set email format to HTML
$mail->Username = 'fahim.mazumder73@gmail.com';// SMTP username
$mail->Password = 'fahim1145073';// SMTP password
$mail->setFrom('example@mail.com', $_POST['uname']);//Your application NAME and EMAIL
$mail->Subject = 'Reset Password';//Message subject
$mail->MsgHTML("<h3>$name Heres is your password</h3><p>Password: $pass</p>");// Message body
$mail->addAddress($email);// Target email
	if(!$mail->Send()){
		 echo "Mailer Error: " . $mail->ErrorInfo;
		echo "Message could not sent!";
	}else
		header('location:login.php');
		echo "<script>
				alert('An email has been sent to your email');
			</script>
		";
	
?>