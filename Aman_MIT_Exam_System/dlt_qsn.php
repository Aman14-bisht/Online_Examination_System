<?php   
$Q_id= $_GET['token'];

include('db.php');

$cmd= "delete from ques_bank where Q_id='$Q_id'";

if($db->query($cmd)==true)
{
	header('location: Questions_f.php');
}
else
{
	echo $cn->error;
}

  ?>