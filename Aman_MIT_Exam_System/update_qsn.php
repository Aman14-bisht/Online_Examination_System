<?php  
if(isset($_GET['token']))
{ 
$Q_id=$_GET['token'];
include('db.php');
$data=$db->query("select * from ques_bank where Q_id='$Q_id'");
$rw=$data->fetch_row();
}
?>
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

  <body>
   <?php include('menu.php'); ?>

<div class="container-fluid" style="margin-left: 250px;width:calc(100% - 250px)"> 
   <div class="card">
    <div class="card-header mt-5">
      <h4> Question Papers</h4>
    </div>
    <form method="POST" action="update_qsn_bck.php">
    <div class="card-body">
        <div class="row"> 
          <div class="col-md-12">
            <div class="form-group">
            <label for="ppr">Enter Question</label>
            <input type="text" name="ppr" placeholder="Enter Here" required id="ppr" class="form-control" 
            value="<?php echo $rw[3]; ?>">
            <input type="hidden" name="q_id" placeholder="Enter Here" required class="form-control" 
            value="<?php echo $rw[2]; ?>">
            </div>
            </div>


          <div class="col-md-4">
            
            <div class="form-group">
        <label for="op1">option1</label>
         <input type="text" class="form-control" id="op1"  required placeholder="Enter Here" name="op1" 
         value="<?php  echo  $rw[4]; ?>">
    </div>
    </div>
          
          <div class="col-md-4">
           <div class="form-group">
        <label for="op2">option2</label>
         <input type="text" class="form-control" id="op2"  required placeholder="Enter Here" name="op2" value="<?php echo $rw[5]; ?>">
      </div>
    </div>
          
          <div class="col-md-4">
         <div class="form-group">
        <label for="op3">option3</label>
         <input type="text" class="form-control" id="op3"  required placeholder="Enter Here" name="op3" value="<?php echo $rw[6]; ?>">
     </div>
   </div>

         <div class="col-md-4">
        <div class="form-group">
        <label for="op4">option4</label>
         <input type="text" class="form-control" id="op4"  required placeholder="Enter Here" name="op4" value="<?php echo $rw[7]; ?>">
     </div>
   </div>

      <div class="col-md-4">
        <div class="form-group">
        <label for="Ans">Right Answer</label>
         <input type="text" class="form-control" id="Ans"  required placeholder="Enter Here" name="ans" 
         value="<?php echo $rw[8]; ?>">
     </div>
   </div>


    <div class="col-md-4">
         <div class="form-group">
          <label for="btn"></label>
        <input type="submit" name="btn" value="UPDATE" class="btn btn-success btn-block p-2" id="btn">
   </div>
 </div>

      </div>
    </div>
    </form>

  </div>
</div>
 
</body>
</html>