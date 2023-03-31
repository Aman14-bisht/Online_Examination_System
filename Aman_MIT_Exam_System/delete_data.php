<?php   
$id= $_GET['token'];

$cn=new mysqli("localhost","root","","final_project");

$cmd= "delete from student_records where stu_ID= '$id'";

if($cn->query($cmd)==true)
{
	header('location: show_data.php');
}
else
{
	echo $cn->error;
}

  ?>