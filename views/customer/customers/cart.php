<?php 

session_start();
if (isset($_POST['submit'])) {	
	if (isset($_SESSION['cart'])) {
		$product_array_id = array_column($_SESSION['cart'], "id");
		if (!in_array($_POST['id'], $product_array_id)) {
			$count = count($_SESSION['cart']);
			$products_array = [
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'price' => $_POST['price'],
				'quantity' => $_POST['quantity']
			];
			$_SESSION['cart'][$count] = $products_array;
			echo '<script>Window.location="cart.php"</script>';
		} else{
			echo '<script>alert("Sản phẩm đã được thêm vào giỏ hàng!")</script>';
			echo '<script>Window.location="cart.php"</script>';
		}
	} else{
		$products_array = [
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'price' => $_POST['price'],
				'quantity' => $_POST['quantity']
		];
		$_SESSION['cart'][0] = $products_array;
	
	}

}
	


if (isset($_GET['action'])) {
	if ($_GET['action'] == "delete") {
		foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['id'] == $_GET['id']) {
				unset($_SESSION['cart'][$key]);
				echo '<script>alert("Product deleted!")</script>';
				echo '<script>Window.location="cart.php"</script>';
			}
		}
	}
}


 ?>
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
	<link rel="stylesheet" type="text/css" href="views/css/site.css">
</head>
<body>
	<main>
		
	
	<?php include'views/inc/clients/header.php'; ?>
	<div class="container" style="padding-top: 100px">
		<table class="table table-boder" >
			<caption><h3>Chi tiết giỏ hàng</h3></caption>
			<tr>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
				<th>Xóa sản phẩm</th>
			</tr>
			<?php if (!empty($_SESSION['cart'])): ?>
				<?php $total = 0; ?>
				<?php foreach ($_SESSION['cart'] as $key => $value): ?>
					<tr>
						<td><?php echo $value["name"] ?></td>
						<td><?php echo $value["price"] ?></td>
						<td><?php echo $value["quantity"] ?></td>
						<td><?php echo number_format($value["price"] * $value["quantity"]) ?></td>
						<td><a href="detail-cart?action=delete&id=<?php echo $value["id"] ?>" class = "btn btn-danger">Xóa</a></td>
					</tr>
					<?php $total = $total + ($value["price"] * $value["quantity"]) ?>
					
				<?php endforeach ?>
				<tr>
					<td colspan="3">Tổng tiền:</td>
					<td><?php echo number_format($total); $_SESSION['tongtien'] = $total; ?></td>
					<td><a href="thanh-toan" title="" class="btn btn-primary" style="font-size: 20px">Thanh toán</a></td>
				</tr>
			<?php endif ?>
		</table>
		<button type="button"><a href="homepage" style="color: #fff" title="">Buy More</a></button>
	</div>
	</main>
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