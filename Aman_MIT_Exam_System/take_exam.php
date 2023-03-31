<?php  
include('stu_session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	  <title>show data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container-fluid">
		<div class="card mt-2">
			<div class="card-header text-center">
				<h4>Online Exam Portal</h4>
			</div>
		</div>

		<div class="row">
		
      <div class="col-md-3"></div>

  <div class="col-md-6">
  	<div class="card">
  
  	<div class="card-body">
      <style type="text/css">
      #exam_id
      {
         font-size: 20px;
         text-align: center;
         background: navy;
         color: white;
         padding: 10px;
      }
      .rem
      {
        background: skyblue;
        padding: 10px;
        text-align: right;
        font-weight: bold;
        font-size: 13px;
      }
    .ques_data
    {
      background: #effff4;
     
    }
    .ques_data>div
   {
     background: rgba(0,0,255,0.8);
     padding: 10px;
     color: white;
   }
    .ques_data>ol
    {
      background: transparent;
      padding-top: 20px;
    }
    .ques_data>ol>li
    {
      padding: 5px;
      font-size: 13px;
       background: transparent;
       cursor: pointer;
    }
    .ques_data>ol>li.none
    {
      display: none;
    }
    .ques_data .btn
    {
       text-align: center;
       width: 100%;
    }
    .ques_data .btn button[type='button']
    {
      background: skyblue;
      border: 0;
      font-size: 14px;
      width: 100px;
      padding: 5px;
    }
</style>

       <div class="paper_header">
            <div class="sub" id="exam_id">Web Development</div>
            <div class="rem">Remaining Time:<span id="rem_time"> 12:00 00 PM</span></div>
        </div>


<div class="ques_data">
  		     <div>Q.<span id="q_num">1</span> : <span id="ques"></span></div>
            <ol>
                <li><div id="option1"></div></li>
                <li><div id="option2"></div></li>
                <li><div id="option3"></div></li>
                <li><div id="option4"></div></li>
                <li class="none"><div id="question_id"></div></li>
            </ol>
            <div class="btn">
             <button type="button"  id="pre"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;PRE </button>
             <button type="button"  id="nxt">NEXT&nbsp; <i class="fa fa-arrow-right"></i></button>
              <button type="button"  id="finished" disabled>FINISH&nbsp;<i class="fa fa-check-square-o"></i></button>
            </div>
  		</div>
  	</div>
  </div>
  <div class="col-md-3"></div>
  </div>
 </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        var tt=0;var q_no= 0,dir=0;
        var stu_id="<?php echo $stu_id; ?>";
        var rem_time=100;
       
        // count total no of Question
        $.post(
            'count_questions_no.php',
            {exam_id:$('#exam_id').text()},
            function(data)
            {
              
                tt=data-1;
                Load_Exam_Data();
            }
        );
//end


        //display remaining timing
        var secd=60;
        var timer_status;
      
        timer();
        timer_status=setInterval(timer,1000);
        function timer()
        {
            secd--;
            if(secd<0)
            {
                rem_time--;

                secd=59;
                if(rem_time<0)
                {
                    clearInterval(timer_status);
                    alert("oops !! Time Expired \n Your exam successfully submitted");
                    //check_results();
                }
            }
            else
            {
                if(secd<10)
                {
                    secd="0"+secd;
                }

                $("#rem_time").html(' '+rem_time+' Min : '+secd+' Sec');
            }



       }


//end



        $("#nxt").click(function(){
            if(tt>q_no)
            {
                q_no++;
                Load_Exam_Data();
                if(tt==q_no)
                {
                    $("#finished").css('background','green');
                    $('#finished').removeAttr('disabled');
                }
            }
        });


        $("#pre").click(function(){
            if(q_no>0)
            {
                q_no--;
                Load_Exam_Data();
            }
        });


        $("#solved_data").on("click","button", function(){
            q_no=$(this).text()-1;
            Load_Exam_Data();
            if(tt==q_no)
            {
                $("#finished").css('background','green');
                $('#finished').removeAttr('disabled');
            }
        });


      

        // Load All Exam Question Bank Start
        function Load_Exam_Data()
        {
           //load Question_id
            $.post(
                'load_question_id.php',
                {exam_id:$('#exam_id').text(),qno:q_no},
                function(data)
                {
                    $("#question_id").html(data);
                    load_student_given_answer();
                }
            );
         //end

         //load Question
            $.post(
                'load_paper_question.php',
                {exam_id:$('#exam_id').text(),qno:q_no},
                function(data)
                {
                    $("#ques").html(data);
                    $("#q_num").html(q_no+1);
                }
            );
        //     //end

        //     //load option 1
            $.post(
                'load_paper_op1.php',
                {exam_id:$('#exam_id').text(),qno:q_no},
                function(data)
                {
                    $("#option1").html(data);

                }
            );
        //end

        //load option 2
            $.post(
                'load_paper_op2.php',
                {exam_id:$('#exam_id').text(),qno:q_no},
                function(data)
                {
                    $("#option2").html(data);
                }
            );
        //end

        //load option 3
            $.post(
                'load_paper_op3.php',
                {exam_id:$('#exam_id').text(),qno:q_no},
                function(data)
                {
                    $("#option3").html(data);
                }
            );
        //end

        //load option 4
            $.post(
                'load_paper_op4.php',
                {exam_id:$('#exam_id').text(),qno:q_no},
                function(data)
                {
                    $("#option4").html(data);
                }
            );
            //end

         }

        // Load All Exam Question Bank End


       

        // //store ans expression

        $("#option1,#option2,#option3,#option4").click(function(){

            var  question_id=$("#question_id").text();
            var  question=$("#ques").text();
            var  exp=$(this).text();


            $.post(
                'store_temp_ans.php',
                {stu_id:stu_id,exam_id:$('#exam_id').text(),ques:question,t_ans:exp,question_id:question_id},
                function(data)
                {
                    load_student_given_answer();
                }
            );
        });




        function check_results()
        {
            var tm=tt+1;
            $.post(
                'check_exam_results.php',
                {exam_id:$('#exam_id').text(),stu_id:stu_id,t_marks:tm},
                function(data)
                {
                    if(data=='OK')
                    {
                        location.href="student_portal.php";
                    }
                    else
                    {
                        alert("exam already submitted");
                    }


                }
            );
        }


        $("#finished").click(function(){
            check_results();
        });


        function load_student_given_answer()
        {
            var question_id=$('#question_id').text();
            $.post(
                'load_student_given_answer.php',
                {exam_id:$('#exam_id').text(),stu_id:stu_id,ques_id:question_id},
                function(data)
                {
                
                    var op1=$('#option1').text();
                    var op2=$('#option2').text();
                    var op3=$('#option3').text();
                    var op4=$('#option4').text();
                    if(data!='')
                    {
                        if(data==op1)
                        {
                            $('.ques_data>ol>li:nth-child(1)').css('background','#9cf0ee');
                            $('.ques_data>ol>li:nth-child(2)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(3)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(4)').css('background','#effff4');
                        }
                        if(data==op2)
                        {
                            $('.ques_data>ol>li:nth-child(2)').css('background','#9cf0ee');
                            $('.ques_data>ol>li:nth-child(1)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(3)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(4)').css('background','#effff4');
                        }
                        if(data==op3)
                        {
                            $('.ques_data>ol>li:nth-child(3)').css('background','#9cf0ee');
                            $('.ques_data>ol>li:nth-child(2)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(1)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(4)').css('background','#effff4');
                        }
                        if(data==op4)
                        {
                            $('.ques_data>ol>li:nth-child(4)').css('background','#9cf0ee');
                            $('.ques_data>ol>li:nth-child(2)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(3)').css('background','#effff4');
                            $('.ques_data>ol>li:nth-child(1)').css('background','#effff4');
                        }

                    }
                    else
                    {
                        $('.ques_data>ol>li:nth-child(1)').css('background','#effff4');
                        $('.ques_data>ol>li:nth-child(2)').css('background','#effff4');
                        $('.ques_data>ol>li:nth-child(3)').css('background','#effff4');
                        $('.ques_data>ol>li:nth-child(4)').css('background','#effff4');
                    }

                }
            );
        }


    });

</script>



</body>
</html>