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
      <h4> Registration Here</h4>
    </div>
    <form method="POST" action="save_stu_data.php">
    <div class="card-body">
        <div class="row">
          <div class="col-md-6">
              <div class="card-body">
                  <div class="form-group">
        <label for="name">Student Name</label>
         <input type="text" class="form-control" id="name" required placeholder="Student Name" name="n1">
    </div>
     <div class="form-group">
       <label for="reg">Registration Date</label>
        <input type="Date" class="form-control" id="reg"  required name="n2">
  </div>

   <div class="form-group">
        <label for="f-name">Father's Name</label>
         <input type="text" class="form-control" id="f-name"  required placeholder="Father's Name" name="n3">
    </div>
     <div class="form-group">
       <label for="m-name">Mother's Name</label>
        <input type="text" class="form-control" id="m-name" required placeholder="Mother's Name" name="n4">
  </div>
     <div class="form-group">
       <label for="dob">Date of Birth</label>
        <input type="Date" class="form-control" id="dob" required name="n5">
  </div>
   <div class="form-group">
       <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" required name="n6" placeholder="number">
  </div>
          </div>
          </div>
          <div class="col-md-6">
              <div class="card-body">
                 <div class="form-group">
        <label for="Stu_id">Email ID</label>
         <input type="email" class="form-control" id="email"  required placeholder="Email  ID" name="n7">
    </div>
     <div class="form-group">
       <label for="cls"> Class</label>
        <input type="text" class="form-control" id="cls"  required placeholder="Class" name="n8">
  </div>

   <div class="form-group">
        <label for="pass">Password</label>
         <input type="Password" class="form-control" id="pass"  required placeholder="Password" name="n9">
    </div>
     <div class="form-group">
       <label for="pwd">Re-Enter Password</label>
        <input type="Password" class="form-control" id="pwd"  required placeholder="Re-Enter Password" name="n10">
  </div>

    <button type="submit" class="btn btn-success btn-block">Submit</button>
     <button type="submit" class="btn btn-primary btn-block">Reset</button>

      <?php  

    $ab="";

  if(isset($_GET['tk']))
  {
    $ab = $_GET['tk'];
  }

  ?>
              </div>
          </div>
        </div>
    </div>
  </form> 

  </div>
</div>




	

</body>
</html>