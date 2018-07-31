 <!DOCTYPE html>
 <html>
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
	<!-- <link rel="stylesheet" type="text/css" href="views/css/site.css"> -->
 </head>
 <body>
 	<?php include'views/inc/clients/header.php'; ?>
 	<div class="content-wrapper" style="padding-top: 100px">
		<div class="container">
			<div class="col-md-4 col-md-offset-4">
				<span style="font-size: 30px; font-family: none; font-weight: bold">
					Thanh toán đơn hàng
				</span>
				<?php foreach ($cusInfo as $value): ?>
					<form action="save-order" method="post" accept-charset="utf-8">
					<div class="form-group">
						<input type="hidden" readonly="" name="makh" class="form-control" value="<?php echo $value->id ?>">
					</div>	
					<div class="form-group">
						<label>Tên khách hàng</label>
						<input type="text" readonly="" name="tenkhachhang" class="form-control" value="<?php echo $value->tenkhachhang ?>">
					</div>	
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="text" readonly="" name="diachi" class="form-control" value="<?php echo $value->diachi ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" readonly="" name="email" class="form-control" value="<?php echo $value->email ?>">
					</div>
					<div class="form-group">
						<label>Điện thoại</label>
						<input type="text" readonly="" name="dienthoai" class="form-control" value="<?php echo $value->dienthoai ?>">
					</div>
					<div class="form-group">
						<label>Tổng tiền</label>
						<input type="number" readonly="" name="tongtien" class="form-control" value="<?php echo $_SESSION['tongtien'] ?>">
					</div>
					<div class="form-group">
						<label>Ngày đặt hàng</label>
						<input type="text" readonly="" name="ngaydathang" class="form-control" value="<?php echo date("d/m/Y") ?>">
					</div>
					<div class="form-group">
						<label>Ghi chú</label>
						<input type="text"  name="note" class="form-control" value="">
					</div>
					<div class="form-group">
						<input type="hidden"  name="trangthai" class="form-control" value="0">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success" onclick="alert('Đã mua thành công!')">Thanh toán</button>
					</div>	
				</form>
				<?php endforeach ?>
			</div>	
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