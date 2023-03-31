<?php  include('manage_session.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>show data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css" />
</head>
<body>


<?php include('menu.php'); ?>


<div class="container-fluid" style="margin-left: 250px;width:calc(100% - 250px)">
   <div class="card">
    <div class="card-header mt-5">
      <h4> Student's Results</h4>
    </div>
      </div>

    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Father's Name</th>
        <th>Phone</th>
        <th>Class</th>
        <th>Obtain Marks</th>
        <th>Total Marks</th>
        <th>Per.</th>
              </tr>
    </thead>
<tbody>

  <?php 
   
   include('db.php');
   $fecth_results=$db->query("select * from student_results_record");
   while($results_data=$fecth_results->fetch_assoc())
   {
     $stu_id=$results_data['stu_id'];
     $data=$db->query("select * from student_records where stu_ID='$stu_id'");
     $fetch_data=$data->fetch_row();
     $ob=$results_data['ob_marks'];
     $tt=$results_data['t_marks'];
     $per=($ob*100)/$tt;
      ?>

 <tr> 
   <td>  <?php  echo $fetch_data[0]; ?>  </td>
   <td>  <?php  echo $fetch_data[1]; ?>  </td>
  
   <td>  <?php  echo $fetch_data[3]; ?> </td>
   
   <td> <?php  echo $fetch_data[6]; ?> </td>
  <td> <?php  echo $fetch_data[8]; ?> </td>
<td> <?php  echo $ob; ?> </td>
<td> <?php  echo $tt; ?> </td>
  <td> <?php  echo $per."%"; ?> </td>
 </tr>

    
<?php  } ?>

</div>
	</tbody>
</table>

</body>
</html>