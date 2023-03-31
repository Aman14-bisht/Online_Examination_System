<?php   

$id= 'st' .date('ymdhis');
$nm= $_POST['n1'];
$rg= $_POST['n2'];
$fn= $_POST['n3'];
$mm= $_POST['n4'];
$dob= $_POST['n5'];
$phn= $_POST['n6'];
$eid= $_POST['n7'];
$cls= $_POST['n8'];
$pas= $_POST['n9'];
$rp= $_POST['n10'];

include('db.php');

if($db->connect_error)
{
	die($db->connect_error);
}
else
{
  $cmd="insert into student_records values('$id','$nm','$rg','$fn','$mm','$dob', '$phn', '$eid','$cls','$pas','$rp')";
  if($db->query($cmd)==true)
  {
 header('location:stu_data.php?tk=Data Stored...');
  }
  else
  {
  	echo $db->error;
  }
}


 ?>