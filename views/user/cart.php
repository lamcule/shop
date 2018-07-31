<?php 
session_start();

if (isset($_POST['submit'])) {
	if (isset($_SESSION['cart'])) {
		$product_array_id = array_column($_SESSION['cart'], "id");
		if (!in_array($_GET['id'], $product_array_id)) {
			$count = count($_SESSION['cart']);
			$products_array = [
				'id' => $_GET['id'],
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
				'id' => $_GET['id'],
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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<h2>Chi tiết giỏ hàng</h2>
	<div>
		<table border="1px">
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
						<td><a href="cart-detail?action=delete&id=<?php echo $value["id"] ?>">Del</a></td>
					</tr>
					<?php $total = $total + ($value["price"] * $value["quantity"]) ?>
					
				<?php endforeach ?>
				<tr>
					<td colspan="3">Tổng tiền:</td>
					<td><?php echo number_format($total); $_SESSION['tongtien'] = $total; ?></td>
					<td><a href="thanh-toan">Thanh toán</a></td>
				</tr>
			<?php endif ?>

		</table>
	</div>

	<h3><a href="mua-hang">Trở về...</a></h3>
</body>
</html>