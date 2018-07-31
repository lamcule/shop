<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="content-wrapper">
		<div class="container">
			<div class="col-md-6 col-md-offset-2">
				<h2>Đăng ký thành viên</h2>
				<form action="save-register" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>Tên khách hàng</label>
						<input type="text" name="tenkhachhang" class="form-control">
					</div>	
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="text" name="diachi" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Điện thoại</label>
						<input type="text" name="dienthoai" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<!-- <label>Tra</label> -->
						<input type="hidden" name="trangthai" class="form-control" value="1" >
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success" onclick="alert('Đăng ký thành công!')">Đăng ký</button>
					</div>	
				</form>
			</div>	
		</div>
	</div>
</body>
</html>