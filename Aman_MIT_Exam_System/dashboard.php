
<?php  include('manage_session.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>dashboard</title>
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
      <h4> Dashboard</h4>
      </div>
  </div> 


    <div class="row">
      <div class="col-md-3">
      <div class="card bg-primary">
        <div class="card-body p-5">
          <h4>
            <?php  
           include('db.php');
               $t_admission=$db->query("select * from student_records")->num_rows;
               echo $t_admission;
          ?>
          </h4>
          <span>Total Admissions</span>
        </div>
        <div class="card-footer">
          <span>More info <i class="fa fa-arrow-right"></i></span>
        </div>
         </div>
       </div>
    
       <div class="col-md-3">
      <div class="card bg-warning">
        <div class="card-body p-5">

          <h4>
            <?php  
               $t_admission=$db->query("select * from student_results_record")->num_rows;
               echo $t_admission;
          ?>
          </h4>
          <span>Total Results</span>
        </div>
        <div class="card-footer">
          <span>More info <i class="fa fa-arrow-right"></i></span>
        </div>
         </div>
       </div>

       <div class="col-md-3">
      <div class="card bg-success">
        <div class="card-body p-5">
          <h4>
            <?php  
               $t_admission=$db->query("select * from student_results_record where ob_marks>32")->num_rows;
               echo $t_admission;
          ?>
        </h4>
          <span>Total Pass</span>
        </div>
        <div class="card-footer">
          <span>More info <i class="fa fa-arrow-right"></i></span>
        </div>
         </div>
       </div>

       <div class="col-md-3">
      <div class="card bg-danger">
        <div class="card-body p-5">
          <h4>
            <?php  
               $t_admission=$db->query("select * from student_results_record where ob_marks<33")->num_rows;
               echo $t_admission;
          ?>
        </h4>
          <span>Total Failed</span>
        </div>
        <div class="card-footer">
          <span>More info <i class="fa fa-arrow-right"></i></span>
        </div>
         </div>
       </div>




    </div>     
</div>


</body>
</html>