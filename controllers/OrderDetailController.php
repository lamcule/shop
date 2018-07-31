<?php 
require_once 'models/OrderDetail.php';
require_once 'models/Order.php';

class OrderDetailController{
	public function index(){
		$orderdetail = OrderDetail::all();
		$orders = Order::all();
		include 'views/admin/orderdetail/index.php';
	}
}

 ?>