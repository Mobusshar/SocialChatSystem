<?php
session_start();
if (isset($_SESSION['name'])) {
  
  }
  else{
header("location: login.php");
    
  }
include 'dbh.php';
$slang=0;
 
$msg=$_POST['msg'];
$name=$_SESSION['name'];

$xml=simplexml_load_file("slang.xml") or die("Error: Cannot create object");
foreach($xml->exception->children() as $sln){

       
      if (strpos($msg,trim($sln->type1[0])) !== false) {
                  $slang=1;
                  break;
            }else if(strpos($msg,trim($sln->type2[0]))  !== false)
            {
            	$slang=1;
            	break;
            }else if(strpos($msg,trim($sln->type3[0]))  !== false)
            {
            	$slang=1;
            	break;
            }
            else if(strpos($msg,trim($sln->type4[0]))  !== false)
            {
            	$slang=1;
            	break;
            }

            
           // echo strpos($msg,$xml->exception->sln[$i]->type1);
}

 if($slang==0)
 {
   $sql = "insert into posts(msg,name) values ('$msg','$name')";
}else 
{
	$sql = "insert into posts(msg,name) values (\"you can't use slang language\",'$name')";
}
$result=$conn->query($sql);

header("Location:groupmsg.php");


?>