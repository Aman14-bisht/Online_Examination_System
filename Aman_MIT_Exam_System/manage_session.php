<?php
session_start();
$myuser="";
if(isset($_SESSION['username']))
{
  $myuser=$_SESSION['username'];
}
else
{
	header('location:login.php?tk=logout success');
	
}

?>