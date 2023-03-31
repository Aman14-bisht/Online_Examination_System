<?php   
$id= 'st' .date('ymdhis');
$nm= $_POST['n1'];
$rg=  $_POST['n2'];
$fn=  $_POST['n3'];
$mm=  $_POST['n4'];
$dob= $_POST['n5'];
$phn= $_POST['n6'];
$eid= $_POST['n7'];
$cls= $_POST['n8'];
$pas= $_POST['n9'];
$rp= $_POST['n10'];


$cn=new mysqli("localhost","root","","final_project");

$cmd= "update student_records set Stu_name='$nm',Reg_date='$rg',f_name='$fn',m_name='$mm',Dob='$dob',phone='$phn',email='$eid',password='$pas',re_pas='$rp'";

if($cn->query($cmd)==true)
{
	header('location: update_data.php');
}
else
{
	echo $cn->error;
}

  ?>