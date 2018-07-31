<?php 
require_once 'models/Product.php';
require_once 'models/Customer.php';

class HomePageController{
	public function index(){
		$products = Product::all();
		include_once 'views/customer/clients/homepage.php';
	}
	public function trouser(){
		$trousers = Product::where(['maloai',1])->get();
		include_once 'views/customer/clients/trouser.php';
	}
	public function shirt(){
		$shirts = Product::where(['maloai',2])->get();
		include_once 'views/customer/clients/shirt.php';
	}
	public function accessory(){
		$accessories = Product::where(['maloai',3])->get();
		include_once 'views/customer/clients/accessory.php';
	}
	public function create(){
		$customers = Customer::all();
		include_once 'views/customer/customers/signup.php';
	}
	public function saveSignUp(){
		$tenkhachhang = $_POST['tenkhachhang'];
		$diachi = $_POST['diachi'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$trangthai = $_POST['trangthai'];
		

		$model = new Customer();
		$model->tenkhachhang = $tenkhachhang;
		$model->diachi = $diachi;
		$model->email = $email;
		$model->dienthoai = $dienthoai;
		$model->username = $username;
		$model->password = md5($password);
		$model->trangthai = $trangthai;
		$model->insert();
		header('location: sign-in');
	}
	public function updateInfoCustomer(){;
		$model = Customer::getInfoCustomer();
		include_once 'views/customer/customers/update.php';
	}
	public function saveUpdateInfoCustomer(){
		$id = $_POST['id'];
		$tenkhachhang = $_POST['tenkhachhang'];
		$diachi = $_POST['diachi'];
		// $email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$password = $_POST['password'];

		$model = Customer::find($id);
		$model->tenkhachhang = $tenkhachhang;
		$model->diachi = $diachi;
		$model->dienthoai = $dienthoai;
		$model->password = md5($password);
		$model->update();
		header('location: homepage');
	}

}

?>