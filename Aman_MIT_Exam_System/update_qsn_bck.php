<?php 

$Q_id=$_POST['q_id'];
$Ques=$_POST['ppr'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$op4=$_POST['op4'];
$ans=$_POST['ans'];
include('db.php');

$cmd= "update ques_bank set question='$Ques',option_1='$op1',option_2='$op2',option_3='$op3',option_4='$op4',ans='$ans'  where Q_id='$Q_id'";

if($db->query($cmd)==true)
{
  header('location: Questions_f.php');
}
else
{
  echo $cn->error;
}

  ?>