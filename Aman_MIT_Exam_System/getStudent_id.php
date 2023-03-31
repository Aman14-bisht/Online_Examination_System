<?php 
$username=$_POST['user'];
$pass=$_POST['pass'];

include('db.php');

$cmd="select * from  student_records where phone='$username'  and password='$pass' ";
$data=$db->query($cmd)->num_rows;

if($data==1)
{   
	$rw=$data->fetch_row();
	session_start();
	$_SESSION['Student_ID']=$id;
	header('location:student_portal.php');
}
else
{
	echo "Login failed";
}




?>