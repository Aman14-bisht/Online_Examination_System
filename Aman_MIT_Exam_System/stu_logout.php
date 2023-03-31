<?php  
session_start();

if(isset($_SESSION['stu_name']))
{
	session_destroy();
	header('location:index.php?tk=logout success');
}
else
{
	header('location:index.php?tk=logout success');
}

 ?>