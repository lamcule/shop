<?php 

require_once '../../models/Customer.php';
// require_once '../../models/Oder.php';
// require_once '../../models/Customer.php';
// $customers = new Customer();
// $customer_info = $customers->getInfoCustomer();die;
echo $_SESSION['user']['username'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">

 </head>
 <body>
 	<div class="container">
 		<form action="">
 		<div class="form-group">
		    <label for="exampleInputEmail1">Họ tên người nhận:</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
		 </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Địa chỉ:</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" >
		 </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Số điện thoại:</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" >
		 </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Tổng tiền:</label>
		    <input type="number" class="form-control" id="exampleInputPassword1" >
		 </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
 	</form>
 	</div>
 </body>
 </html>