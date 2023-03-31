<?php
$exam_id=trim($_POST['exam_id']);
$stu_id=trim($_POST['stu_id']);
$ques_id=trim($_POST['ques_id']);

include("db.php");
if($db->connect_error)
{
    die($db->connect_error);
}
else
{
    $cmd="SELECT *  FROM student_expression WHERE exam_id='$exam_id' AND stu_id='$stu_id' AND ques_id='$ques_id'  ";
    $results=$db->query($cmd);
    $rows=$results->fetch_assoc();
    echo  $rows['stu_ans'];

}


?>