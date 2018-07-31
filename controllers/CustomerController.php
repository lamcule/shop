<?php 
require_once 'models/Customer.php';

class CustomerController{
	public function index(){
		$customers = Customer::all();
		include 'views/admin/customers/index.php';
	}
	// public function create(){
	// 	$customers = Customer::all();
	// 	include 'views/admin/customers/create.php';
	// }
	// public function saveCustomer(){
	// 	$tenkhachhang = $_POST['tenkhachhang'];
	// 	$diachi = $_POST['diachi'];
	// 	$email = $_POST['email'];
	// 	$dienthoai = $_POST['dienthoai'];
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];
	// 	$loaikhachhang = $_POST['loaikhachhang'];
	// 	$trangthai = $_POST['trangthai'];

	// 	$model = new Customer();
	// 	$model->tenkhachhang = $tenkhachhang;
	// 	$model->diachi = $diachi;
	// 	$model->email = $email;
	// 	$model->dienthoai = $dienthoai;
	// 	$model->username = $username;
	// 	$model->password = md5($password);
	// 	$model->loaikhachhang = $loaikhachhang;
	// 	$model->trangthai = $trangthai;
	// 	$model->insert();
	// 	header('location: customers');
	// }
	public function updateCustomer(){
		$id = $_GET['id'];
		$model = Customer::find($id);
		$admins = Customer::all();
		// include 'views/admin/customers/update.php';
		include 'views/customer/customers/update.php';
	}
	public function saveUpdateCustomer(){
		$id = $_POST['id'];
		$loaikhachhang = $_POST['loaikhachhang'];
		$trangthai = $_POST['trangthai'];

		$model = Customer::find($id);
		$model->loaikhachhang = $loaikhachhang;
		$model->trangthai = $trangthai;
		$model->update();
		header('location: customers');
	}
	// Xoá mềm
	public function deleteCustomer(){
		$id = $_GET['id'];
		$model = Customer::find($id);
		if ($model) {
			$model->trangthai = '0';
			$model->update();
			header('location: customers');
		}
	}
	
	
}


 ?>