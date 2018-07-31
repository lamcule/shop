<?php 
require_once 'models/Order.php';
require_once 'models/Customer.php';
require_once 'models/OrderDetail.php';
require_once 'models/Product.php';
session_start();
class OrderController
{
	public function index(){		
		$customers = new Customer();
		$cusInfo = $customers->getInfoCustomer();
		include 'views/customer/customers/thanhtoan.php';
	}
	
	public function saveOrder(){
		$makh = $_POST['makh'];
		$tongtien = $_POST['tongtien'];
		$note = $_POST['note'];
		$ngaygiaohang = '';
		$trangthai = $_POST['trangthai'];

		$model = new Order();
		$model->makh = $makh;
		$model->tongtien = $tongtien;
		$model->ngayDathang = (new Datetime())->format('Y-m-d');
		$model->ngayGiaohang = $ngaygiaohang;
		$model->ghichu = $note;
		$model->trangthai = $trangthai;
		$model->insert();
		// var_dump($model->id);die;
		foreach ($_SESSION['cart'] as $key => $value) {
			$masp = $value['id'];
			$soluong = $value['quantity'];
			$gia = $value['price'];
			$models = new OrderDetail();
			$models->madh = $model->id;	
			$models->masp = $masp;
			$models->soluong = $soluong;
			$models->gia = $gia;
			$models->insert();

		}
		// var_dump($model->id);die;
		header('location:homepage');
	}
	// public function saveOrderDetail(){
	// 	$model = new Order();
	// 	$madh = $model->id;
	// 	// $masp = ;
	// 	// $ngaydathang = $_POST['ngaydathang'];
	// 	$note = $_POST['note'];
	// 	$ngaygiaohang = '';
	// 	$trangthai = $_POST['trangthai'];

	// 	$model = new OrderDetail();
	// 	$model->makh = $makh;
	// 	$model->tongtien = $tongtien;
	// 	$model->ngayDathang = (new Datetime())->format('Y-m-d');
	// 	$model->ngayGiaohang = $ngaygiaohang;
	// 	$model->ghichu = $note;
	// 	$model->trangthai = $trangthai;
	// 	$model->insert();
	// 	header('location:homepage');
	// }
	public function indexAdmin(){
		$orders = Order::all();
		// $orders->getMadh();
		// var_dump($orders->getMadh());die;
		include 'views/admin/orders/index.php';
	}
	public function update(){
		$id = $_GET['madh'];
		$model = Order::finded($id);
		// $orders = Order::all();
		// var_dump($model);die;
		include 'views/admin/orders/update.php';
	}
	public function saveUpdateOrder(){
		$madh = $_POST['madh'];
		$ngayGiaohang = $_POST['ngayGiaohang'];
		$trangthai = $_POST['trangthai'];
		$makh = $_POST['makh'];
		$tongtien = $_POST['tongtien'];
		if ($trangthai == 1) {
			/*update don hang*/
			$model = Order::finded($madh);
			$model->ngayGiaohang = $ngayGiaohang;
			$model->trangthai = $trangthai;
			$model->updated();
			/*update chi tiet don hang*/
			$orders_detail = new OrderDetail();
			$order_detail = $orders_detail->updateStatus($madh);
			/*update so luong san pham*/
			$amounts = new OrderDetail();
			$amount_product = $amounts->getAmountProduct($madh);
			foreach ($amount_product as  $value) {
				$masp = $value->masp;
				$soluong = $value->soluong;
				$products = Product::find($masp);
				$soluongcu = $products->soluong;
				$soluongmoi = $soluongcu - $soluong;
				$products->updateAmount($soluongmoi,$masp);
				// var_dump($soluongmoi);die;			
			}
			/*update tong tien khach hang*/
			$totals = new Order();
			$total = $totals->finded($madh);
			$customer_totals = $total->tongtien;
			$customers = Customer::find($total->makh);
			$customers->tongtien += $customer_totals;
			// var_dump($makh);die;
			$customers->updateTotal($customers->tongtien,$makh);

			// $total_customer = ;
			// foreach ($total as $values) {
				
			// }

		}		 
		// var_dump($model);die;
		header('location: orders');
	}
}


 ?>