<?php 
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';

/**
 * 
 */
class DoanhThuController
{
	public function total(){
		$model = new Order();
		$orders = $model->getTotal();
		$total = 0;
		foreach ($orders as $value) {
		  	$total = $total + $value->tongtien;
		}
		$models = new OrderDetail();
		$orders_detail = $models->getAmount();
		$amount = 0;
		foreach ($orders_detail as $values) {
		  	$amount = $amount + $values->soluong;
		  	// echo $amount;die;
		}
		include 'views/admin/dashboard/tong.php';  
	}
	// public function amount(){
	// 	$orders_detail = OrderDetail::all();
	// 	$amount = 0;
	// 	foreach ($orders_detail as $value) {
	// 	  	$amount = $amount + $value->soluong;
	// 	  	echo $amount;die;
	// 	}
	// 	include 'views/admin/dashboard/tong.php';  
	// }
	
}

 ?>