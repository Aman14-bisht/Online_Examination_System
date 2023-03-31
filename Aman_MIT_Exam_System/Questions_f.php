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
      <h4> Question Papers</h4>
    </div>
    <form method="POST" action="Question.php">
    <div class="card-body">
        <div class="row"> 
          <div class="col-md-12">
            <div class="form-group">
            <label for="ppr">Enter Question</label>
            <input type="text" name="ppr" placeholder="Enter Here" required id="ppr" class="form-control">
            </div>
            </div>


          <div class="col-md-4">
            
            <div class="form-group">
        <label for="op1">option1</label>
         <input type="text" class="form-control" id="op1"  required placeholder="Enter Here" name="op1">
    </div>
    </div>
          
          <div class="col-md-4">
           <div class="form-group">
        <label for="op2">option2</label>
         <input type="text" class="form-control" id="op2"  required placeholder="Enter Here" name="op2">
      </div>
    </div>
          
          <div class="col-md-4">
         <div class="form-group">
        <label for="op3">option3</label>
         <input type="text" class="form-control" id="op3"  required placeholder="Enter Here" name="op3">
     </div>
   </div>

         <div class="col-md-4">
        <div class="form-group">
        <label for="op4">option4</label>
         <input type="text" class="form-control" id="op4"  required placeholder="Enter Here" name="op4">
     </div>
   </div>

      <div class="col-md-4">
        <div class="form-group">
        <label for="Ans">Right Answer</label>
         <input type="text" class="form-control" id="Ans"  required placeholder="Enter Here" name="ans">
     </div>
   </div>

    <div class="col-md-4">
         <div class="form-group">
          <label for="btn"></label>
        <input type="submit" name="btn" value="ADD" class="btn btn-success btn-block p-2" id="btn">
   </div>
 </div>

      </div>
    </div>
    </form>

    <?php  

    $ab="";
    
  if(isset($_GET['tok']))
  {
    $ab = $_GET['tok'];
  }

  ?>

  </div>

   
   <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>SR</th>
        <th>Exam_Name</th>
        <th>SET</th>
        <th>Question_Complete_Summery</th>
        <th>Option1</th>
        <th>Option2</th>
        <th>Option3</th>
        <th>Option4</th>
        <th>Right Answer</th>
        <th>Action</th>
      </tr>
    </thead>
<tbody>

  <?php 
   $n=0;
   include('db.php');
   $cmd= "select * from ques_bank";
    $data=$db->query($cmd);
    while($fetch_data=$data->fetch_row())
    {
      $n++;
      ?>

 <tr>
   <td class="small">  <?php  echo $n; ?> </td>
   <td class="small"> <?php  echo $fetch_data[0]; ?> </td>
   <td class="small"> <?php  echo $fetch_data[1]; ?> </td>
   <td class="small"> <?php  echo $fetch_data[3]; ?> </td>
   <td class="small"> <?php  echo $fetch_data[4]; ?> </td>
   <td class="small"> <?php  echo $fetch_data[5]; ?> </td>
   <td class="small"> <?php  echo $fetch_data[6]; ?> </td>
   <td class="small"> <?php  echo $fetch_data[7]; ?> </td>
   <td class="small"> <?php  echo $fetch_data[8]; ?> </td>
   
    <td><a onclick="return confirm('Are You Sure ?');" href="dlt_qsn.php?token=<?php echo $fetch_data[2]; ?>"> <i class="fa fa-trash-o text-danger"></i>
    </a>
    <a href="update_qsn.php?token=<?php echo $fetch_data[2]; ?>"><i class="fa fa-edit text-success"></i> </a></td>
 </tr>

    
<?php  } ?>

</div>
  </tbody>
</table>
   


 </div>

</body>
</html>