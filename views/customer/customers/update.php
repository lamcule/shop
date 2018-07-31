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
<div style="height: 600px; padding-top: 50px">
	<div class="col-md-4 col-md-offset-4">
		<h3 style="font-family: none; font-weight: bold; font-size: 30px;"">Sửa thông tin cá nhân</h3>
		<br>
		<?php foreach ($model as $key => $value): ?>
			<form action="save-update-info-customer" method="post" accept-charset="utf-8" id="createform">
			<input type="hidden" name="id" value="<?=$value->id?>">			
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="tenkhachhang" id="tenkhachhang" class="form-control" value="<?=$value->tenkhachhang?>">
			</div>	
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username"  id="username" class="form-control" value="<?=$value->username?>">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="diachi" id="diachi" class="form-control" value="<?=$value->diachi?>">
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="text" name="dienthoai" id="dienthoai" class="form-control" value="<?=$value->dienthoai?>">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" id="password" class="form-control" value="">
			</div>
			<div class="form-group">
				<p id="msg" style="color: red"></p>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Update</button>
			</div>	
		</form>
		<?php endforeach ?>
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