<?php  
session_start();
if(isset($_SESSION['stu_name']))
{
 $user_id=$_SESSION['stu_name'];
 include('db.php');
 $data=$db->query("select * from student_records where phone='$user_id'");
 $rw=$data->fetch_row();
 $stu_id=$rw[0];
}
else
{
	header('location:index.php');
}
?>