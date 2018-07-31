<?php 
  if (session_id() == "") {
    session_start();
  }
  // var_dump($_SESSION['admin']);
  if ($_SESSION['user'] == '') {
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> NINE </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<script src="views/css/jquery-2.2.4.min.js"></script>
	<script src="views/css/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="views/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">	
</head>
<body>
<?php include 'views/inc/clients/header.php'; ?>
<div style="height: 400px; padding-top: 50px;">
	<div class="col-md-3 col-md-offset-4">
		<h2>Đăng nhập</h2>
			<br>
			<form action="sign-in-user" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="username" class="form-control" placeholder="*Username*">
				</div>	
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="*Password*">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Sign in</button>
					<a href="sign-up" title=""><span style="padding-left: 20px;">You don't have account ?</span></a>
				</div>		
			</form>
	</div>
	
</div>

<?php include 'views/inc/clients/footer.php'; ?>
<div class="container" style="padding-top: 20px;">
		<div class="row">
			<div class="col-xs-6">
				<div class="contact">
					<p>2017 <i class="fa fa-copyright"></i> Nine Theme by <span style="color: red">59PM1</span></p>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="card">
					<ul class="card-icon" style="letter-spacing: 5px">
						<li><a href=""><i class="fa fa-cc-visa"></i></a></li>
						<li><a href=""><i class="fa fa-cc-paypal"></i></a></li>
						<li><a href=""><i class="fa fa-cc-mastercard"></i></a></li>
						<li><a href=""><i class="fa fa-cc-discover"></i></a></li>
						<li><a href=""><i class="fa fa-cc-amex"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>
<?php 
  } else {
    header("location:homepage");
  }
 ?>