<?php 
require_once 'models/TypeProduct.php';

class TypeProductController{
	public function index(){
		$typeproducts = TypeProduct::all();
		include_once 'views/admin/typeproducts/index.php';
	}
	public function create(){
		$typeproduct = TypeProduct::all();
		include 'views/admin/typeproducts/create.php';
	}
	public function saveTypeProduct(){
		$tenloai = $_POST['tenloai'];
		$trangthai = $_POST['trangthai'];

		$model = new TypeProduct();
		$model->tenloai = $tenloai;
		// $model->trangthai = $trangthai;
		$model->trangthai = 1;
		$model->insert();
		// var_dump($model);die;
		header('location: typeproducts');
	}
	public function updateTypeProduct(){
		$id = $_GET['id'];
		$model = TypeProduct::find($id);
		$typeproducts = TypeProduct::all();
		include 'views/admin/typeproducts/update.php';
	}
	public function saveUpdateTypeProduct(){
		$id = $_POST['id'];
		$tenloai = $_POST['tenloai'];
		$trangthai = $_POST['trangthai'];

		$model = TypeProduct::find($id);
		$model->tenloai = $tenloai;
		$model->trangthai = $trangthai;
		$model->update();
		header('location: typeproducts');
	}
	// Xoá mềm
	public function deleteTypeProduct(){
		$id = $_GET['id'];
		$model = TypeProduct::find($id);
		if ($model) {
			$model->trangthai = '0';
			$model->update();
			header('location: typeproducts');
		}
	}
}

 ?>