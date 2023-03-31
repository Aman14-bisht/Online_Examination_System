<?php
$t_marks=$_POST['t_marks'];
$ob_marks=0;
$stu_id=$_POST['stu_id'];
$exam_id=$_POST['exam_id'];

include("db.php");
$check_data=$db->query("SELECT * FROM student_results_record WHERE stu_id='$stu_id' AND exam_id='$exam_id'");
$count_n=$check_data->num_rows;
if($count_n>0)
{
    echo "Exam Already Submitted";
}
else
{
    $cmd="SELECT * FROM student_expression WHERE stu_id='$stu_id' AND exam_id='$exam_id' ";
    $results=$db->query($cmd);
    while($rw=$results->fetch_assoc())
    {
        $stu_ans=$rw['stu_ans'];
        $right_ans=$rw['right_ans'];
        if(strcmp($stu_ans,$right_ans)==0)
        {
            $ob_marks++;
        }
    }
    $saved="INSERT INTO student_results_record(stu_id, exam_id, ob_marks, t_marks) VALUES ('$stu_id','$exam_id','$ob_marks','$t_marks')";
    if($db->query($saved)==true)
    {
               echo "OK";
    }
    else
    {
        echo 'Result Stored Error- '.$db->error;
    }
}

?>
