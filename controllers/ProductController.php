<?php 
require_once 'models/Product.php';

class ProductController{
	public function index(){
		$products = Product::all();
		include 'views/admin/products/index.php';
	}
	public function create(){
		$typeproducts = TypeProduct::all();
		$products = Product::all();
		include 'views/admin/products/create.php';
	}
	public function saveProduct(){
		$tensanpham = $_POST['tensanpham'];
		$maloai = $_POST['maloai'];
		$gia = $_POST['gia'];
		$soluong = $_POST['soluong'];
		$thongtin = $_POST['thongtin'];
		$anh = $_FILES['anh'];
		if ($anh['size'] > 0) {
			$fileName = 'views/public/uploads/'.uniqid().'-'.$anh['name'];
			move_uploaded_file($anh['tmp_name'], $fileName);
		}
		$salepercent = $_POST['salepercent'];
		$giasale = $_POST['giasale'];
		$trangthai = 1;

		$model = new Product();

		$model->tensanpham = $tensanpham;
		$model->maloai = $maloai;
		$model->gia = $gia;
		$model->soluong = $soluong;
		$model->thongtin = $thongtin;
		$model->anh = $fileName;
		$model->ngaynhap = (new Datetime())->format('Y-m-d');
		$model->salepercent = $salepercent;
		$model->giasale = $giasale;
		$model->trangthai = $trangthai;

		$model->insert();
		// var_dump($model);die;
		header('location: products');

	}
	public function update(){
		$id = $_GET['id'];
		$model = Product::find($id);
		$products = Product::all();
		$typeproducts = TypeProduct::all();
		include 'views/admin/products/update.php';
	}
	public function saveUpdateProduct(){
		$id = $_POST['id'];
		$tensanpham = $_POST['tensanpham'];
		$tenloai = $_POST['tenloai'];
		$gia = $_POST['gia'];
		$soluong = $_POST['soluong'];
		$thongtin = $_POST['thongtin'];
		$anh = $_FILES['anh'];
		$salepercent = $_POST['salepercent'];
		$giasale = $_POST['giasale'];
		$trangthai = $_POST['trangthai'];

		$model = Product::find($id);
		$fileName = "";
		if ($anh['size'] > 0) {
			$fileName = 'views/public/uploads/'.uniqid().'-'.$anh['name'];
			move_uploaded_file($anh['tmp_name'],$fileName);
			
		}

		$model->tensanpham = $tensanpham;
		$model->tenloai = $tenloai;
		$model->gia = $gia;
		$model->soluong = $soluong;
		$model->thongtin = $thongtin;
		$model->anh = $fileName;
		// $model->ngaynhap = (new Datetime())->format('Y-m-d');
		$model->salepercent = $salepercent;
		$model->giasale = $giasale;
		$model->trangthai = $trangthai;

		$model->update();
		header('location: products');
	}
	// Xoá mềm
	public function deleteProduct(){
		$id = $_GET['id'];
		$model = Product::find($id);
		if ($model) {
			$model->trangthai = '0';
			$model->update();
			header('location: products');
		}
	}
	public function detailProduct(){
		$id = $_GET['id'];
		$model = Product::find($id);
		include 'views/customer/clients/detail.php';
	}
	public function search(){
		$search = $_POST['search'];
		$models = new Product();
		$model = $models->search($search);
		include 'views/customer/clients/search.php';
		// var_dump($model);die;
	}
}

 ?>