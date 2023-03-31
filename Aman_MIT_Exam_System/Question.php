<?php 

$EXAM='software Testing';
$SET= 'SET-1';
$Q_id='Q'.date('Y');
$Ques=$_POST['ppr'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$op4=$_POST['op4'];
$ans=$_POST['ans'];
 
 include('db.php');

if($db->connect_error)
{
	die($db->connect_error);
}
else
{
  $cmd="insert into ques_bank values('$EXAM','$SET','$Q_id','$Ques','$op1','$op2','$op3','$op4','$ans')";
  if($db->query($cmd)==true)
  {
 header('location:Questions_f.php?tok=Question Stored...');
  }
  else
  {
  	echo $db->error;
  }
}
 ?>