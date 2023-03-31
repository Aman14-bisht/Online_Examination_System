<?php 
$username=$_POST['user'];
$pass=$_POST['pass'];

include('db.php');

$cmd="select * from  admin where admin_name='$username'  and admin_password='$pass' ";
$data=$db->query($cmd)->num_rows;

if($data==1)
{
	session_start();
	$_SESSION['username']=$username;
	header('location:dashboard.php');
}
else
{
	echo "Login failed";
}




?>