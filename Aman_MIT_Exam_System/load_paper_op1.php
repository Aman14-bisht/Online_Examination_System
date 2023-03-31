<?php
$exam_id=trim($_POST['exam_id']);
$q_no=trim($_POST['qno']);

include("db.php");
if($db->connect_error)
{
    die($db->connect_error);
}
else
{
    $cmd="SELECT *  FROM ques_bank WHERE Exam_name='$exam_id'  LIMIT ".$q_no.",1  ";
    $results=$db->query($cmd);
    $rows=$results->fetch_assoc();
    echo  $rows['option_1'];

}


?>