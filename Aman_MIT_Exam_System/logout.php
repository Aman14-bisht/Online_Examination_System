<?php  
session_start();

if(isset($_SESSION['username']))
{
	session_destroy();
	header('location:login.php?tk=logout success');
}
else
{
	header('location:login.php?tk=logout success');
}

 ?>