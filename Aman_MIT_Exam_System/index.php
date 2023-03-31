<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login-page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/slogin.css">
</head>
<body>

	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div id="first">
			   <img src="img/mit.webp" class="rounded-circle">
			   <h2 class="text-center">MODERN INSTITUTE OF TECHNOLOGY</h2>
			   <h4 class="text-center">RISHIKESH, DHALWALA, (T.G)</h4>
			</div>
		</div>
		<div class="col-md-4">
		 <div class="mt-5 outer">
			<h2 class="mt-5 text-center" id="head"> Student Login</h2>
		<form method="post" action="stlogin_back.php">
			<div class="form-group mt-4">
				<input type="text" name="user" id="name" class="form-control" placeholder="Username" required>
			</div>
		<div class="form-group mt-4">
				<input type="password" name="pass" id="pass" class="form-control" placeholder="password" required>
			</div>

			<div class="form-group mt-4" id="chkbox">
				<input type="checkbox" name="" id="chk">
				<label for="chk" class="pass">Show password</label>
			</div>
			   <button class="btn btn-warning btn-block text-light" type="submit" id="btn">Login</button>
       <div class="text-center mt-4">
			   <a href="login.php" class="text-warning">Admin Pannel</a> <br>
			</div>
			<div class="text-center bottom">
       <span>Developed By <b>AMAN BISHT</b>(2022)</span>
			</div>
		</form>
	 </div>
	</div>
	</div>
  

</body>
</html>