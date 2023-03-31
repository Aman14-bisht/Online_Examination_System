<?php
$exam_id=trim($_POST['exam_id']);

include("db.php");
if($db->connect_error)
{
    die($db->connect_error);
}
else
{
    $cmd="SELECT question FROM ques_bank WHERE Exam_name='Web Development' ";
    $results=$db->query($cmd);
    $n=$results->num_rows;
    echo $n;
}


?>