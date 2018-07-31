<?php 
require_once 'models/Customer.php';
session_start();
$customers = new Customer();
$cusInfo = $customers->getInfoCustomer();
// var_dump($cusInfo);die;
foreach ($_SESSION['cart'] as $key => $value) {
	$masp = $value['id'];
	$soluong = $value['quantity'];
	$gia = $value['price'];
	$array = [$masp, $soluong, $gia];
}
var_dump($array);die;

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="views/css/bootstrap.min.css">
 	<link rel="stylesheet" href="views/js/bootstrap.min.js">
 </head>
 <body>
 	<div class="content-wrapper">
		<div class="container">
			<div class="col-md-6 col-md-offset-2">
				<h2>Thanh toán đơn hàng</h2>
				<?php foreach ($cusInfo as $value): ?>
					<form action="luu-donhang" method="post" accept-charset="utf-8">
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
 </body>
 </html>