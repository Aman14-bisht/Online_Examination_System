<?php
$stu_id=trim($_POST['stu_id']);
$exam_id=trim($_POST['exam_id']);
$ques=trim($_POST['ques']);
$exp=trim($_POST['t_ans']);
$ques_id=trim($_POST['question_id']);

include("db.php");
if($db->connect_error)
{
    die($db->connect_error);
}
else
{
    $new_data=$db->query("SELECT ans FROM ques_bank WHERE Q_id='$ques_id'");
    $record=$new_data->fetch_assoc();
    $ans=trim($record['ans']);

    $results=$db->query("SELECT * FROM student_expression WHERE stu_id='$stu_id' AND exam_id='$exam_id' AND ques_id='$ques_id'  ");
    $count_row=$results->num_rows;
    if($count_row>0)
    {
        $cmd="UPDATE student_expression SET stu_ans='$exp' WHERE  stu_id='$stu_id' AND exam_id='$exam_id' AND ques_id='$ques_id' ";
        $db->query($cmd);
    }
    else
    {
        $cmd="INSERT INTO student_expression(ques_id,stu_id, exam_id,question,right_ans, stu_ans) VALUES ('$ques_id','$stu_id','$exam_id','$ques','$ans','$exp')";
        $db->query($cmd);
    }



}


?>