<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
              <h4 class="text-center"> Online Exam</h4>
			 </div>

			 <div class="card-body">

              <?php 
             include('db.php');
      $cmd= "select * from ques_bank where Q_id like 'Q2022'";
        $data=$db->query($cmd);
    while($fetch_data=$data->fetch_row())
    {
               ?>
               <div class="container-fluid">
              <h5> <?php echo $fetch_data[3]; ?> </h5>  <br>
              <?php echo $fetch_data[4]; ?>
              <?php echo $fetch_data[5]; ?>
              <?php echo $fetch_data[6]; ?>
              <?php echo $fetch_data[7]; ?>
              <?php echo $fetch_data[8]; ?>

           </div>


               <?php  } ?>


			 	
			 </div>

			 <div class="card_footer text-center">
			 	<input type="submit" name="" value="Submit" class="btn btn-success">
			 	<input type="submit" name="" value="Cancel" class="btn btn-danger">
			 </div>
		</div>
	</div>

</body>
</html>