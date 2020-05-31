<?php


	if(isset($_COOKIE['uname']))
  {
        
  }
  else
  {   
    header("location: login.php");
  }
  
$file = 'slang.xml';

$xml = simplexml_load_file($file);

$ex =  $xml->exception;


/*$sln = $s->addChild('sln category="'.$_POST['ct'].'"');*/
$sln=$ex->addChild("sln");
$sln->addChild('type1', $_POST['t1']);
$sln->addChild('type2', $_POST['t2']);
$sln->addChild('type3', $_POST['t3']);
$sln->addChild('type4', $_POST['t4']);

$xml->asXML($file);

header("Location:moderator.php?added=true");

?>