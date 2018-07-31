<?php 
require_once("models/Product.php");
$products = Product::all();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php foreach ($products as $value): ?>
		<form action="cart-detail?id=<?php echo $value->id ?>" method="post">
			<div>
				<h4><?php echo $value->tensanpham ?></h4>
				<p><?php echo $value->gia ?></p>
				<input type="hidden" name="name" value="<?php echo $value->tensanpham ?>">
				<input type="hidden" name="price" value="<?php echo $value->gia ?>">
				<input type="number" name="quantity" value="1">
				<button name="submit" type="submit">Add to cart</button>
			</div>
		</form>		
	<?php endforeach ?>
</body>
</html>