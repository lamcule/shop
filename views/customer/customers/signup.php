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
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
</head>
<body>
<?php include 'views/inc/clients/header.php'; ?>

<div style="height: 600px; padding-top: 50px;">
	<div class="col-md-4 col-md-offset-4">
				<h3 style="font-size: 30px">Đăng ký thành viên</h3>
				<br>
				<form action="save-sign-up" method="post" accept-charset="utf-8" id="createform">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="tenkhachhang" id="tenkhachhang" class="form-control">
					</div>	
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="diachi" id="diachi" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="dienthoai" id="dienthoai" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" id="password" class="form-control">
					</div>
					<div class="form-group">
						<input type="hidden" name="trangthai" value="1">
					</div>
					<div class="form-group">
						<p id="msg" style="color: red"></p>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Sign up</button>
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
<script>
	$(document).ready(function(){
		$('#createform').validate({
			rules: {
				tenkhachhang: {
					required: true
				},
				diachi : {
					required: true
				},
				email: {
					required: true
				},
				dienthoai: {
					required: true
				},
				username: {
					required: true
				},
				password: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				tenkhachhang: {
					required: "Bạn chưa nhập tên"
				},
				diachi: {
					required: "Bạn chưa nhập địa chỉ"
				},
				email:{
					required: "Bạn chưa nhập Email"
				},
				dienthoai:{
					required: "Bạn chưa nhập số điện thoại"
				},
				username:{
					required: "Bạn chưa nhập Username"
				},
				password:{
					required: "Bạn chưa nhập Password",
					minlength: "Mật khẩu phải tối thiểu 5 ký tự"
				}
			}
		});
	});
</script>		