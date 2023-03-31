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
      <h4> Registration Here</h4>
    </div>
      </div>

    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Registration Date</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Date of Birth</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Class</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
<tbody>

  <?php 
   
   include('db.php');
   $cmd= "select * from student_records";
    $data=$db->query($cmd);
    while($fetch_data=$data->fetch_row())
    {
      ?>

 <tr> 
   <td>  <?php  echo $fetch_data[0]; ?>  </td>
   <td>  <?php  echo $fetch_data[1]; ?>  </td>
   <td> <?php  echo $fetch_data[2]; ?>  </td>
   <td>  <?php  echo $fetch_data[3]; ?> </td>
   <td> <?php  echo $fetch_data[4]; ?>  </td>
   <td>  <?php  echo $fetch_data[5]; ?> </td>
   <td> <?php  echo $fetch_data[6]; ?> </td>
   <td> <?php  echo $fetch_data[7]; ?> </td>
   <td> <?php  echo $fetch_data[8]; ?> </td>
   <td> <?php  echo $fetch_data[9]; ?> </td>
   
    <td><a href="delete_data.php?token=<?php echo $fetch_data[0]; ?>"> <i class="fa fa-trash-o text-danger"></i>
    </a>
    <a href="update_data.php?token=<?php echo $fetch_data[0]; ?>"><i class="fa fa-edit text-success"></i> </a></td>
 </tr>

    
<?php  } ?>

</div>
	</tbody>
</table>

</body>
</html>