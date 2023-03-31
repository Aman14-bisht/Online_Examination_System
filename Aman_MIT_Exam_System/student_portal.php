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
			<div class="col-md-6">
				<div class="card">
					<h3 class="text-center bg-dark text-light p-2 card-header">Student Information</h3>
					<div class="card-body">
					<table class="table table-striped">
          <tbody>

          
          <tr>
          	<td> Student Name </td>
          	<td> <?php  echo $rw[1]; ?> </td>
          </tr> 

           <tr>
          	<td>Student ID</td>
          	<td> <?php  echo $rw[0]; ?> </td>
          </tr>  

           <tr>
          	<td>Registration Date</td>
          	<td> <?php  echo $rw[2]; ?> </td>
          </tr>  

           <tr>
          	<td>Phone</td>
          	<td> <?php  echo $rw[6]; ?> </td>
          </tr>  

           <tr>
          	<td>Email</td>
          	<td> <?php  echo $rw[7]; ?> </td>
          </tr> 

           <tr>
          	<td>Class</td>
          	<td> <?php  echo $rw[8]; ?> </td>
          </tr> 
                   
           </tbody>
 </table>
</div>
  </div>
  </div>

  <div class="col-md-6">
  	<div class="card">
  	<h3 class="text-center card-header bg-primary">All the Best</h3>
  	<h5 class="card-header text-center">Exam Info</h5>
  	<div class="card-body">
      <?php 
        $check_exist=$db->query("select * from student_results_record where stu_id='$stu_id' ")->num_rows;
        if($check_exist>0)
        {
                   echo "<h4 class='text-center'>Your Exam Already Submitted....</h4><br>";
        }
else
{
      ?>
  		<table class=" table table-striped">
  			<tbody>
  				<tr>
  					<td>Exam Name</td>
  					<td>Web Development</td>
  				</tr>
  				<tr>
  					<td>Exam Date</td>
  					<td>5-April-2022</td>
  				</tr>
  				<tr>
  					<td>Total Questions</td>
  					<td>100</td>
  				</tr>
  				<tr>
  					<td>Negative Marking</td>
  					<td>No</td>
  				</tr>
  			</tbody>
  		</table>

  		 <div class="card-footer">
  	<a href="take_exam.php"><input type="button" value="Start Test" class="btn btn-success btn-block m-1"></a>
  <?php } ?>
  	<a href="stu_logout.php"><input type="button" value="Logout" class="btn btn-danger btn-block m-1"></a>
 </div>
  	</div>
  </div>
  </div>
 </div>
</div>

</body>
</html>