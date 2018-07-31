<?php 
require_once 'BaseModel.php';

class Customer extends BaseModel{
	public $tableName = 'khachhang';
	public $columns = ['id', 'tenkhachhang', 'diachi', 'email', 'dienthoai', 'username', 'password', 'loaikhachhang', 'tongtien', 'trangthai'];
	public function login($user, $pass){
		$model = new static();
		$pass = md5($pass);
		$sql = "select * from khachhang where username='$user' and password='$pass'";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public function getInfoCustomer(){
		$customer_name = $_SESSION['user']['username'];
		$model = new static();
		$sql = "select * from khachhang where username= '$customer_name'";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public function updateTotal($tongtien,$makh){
		$model = new static();
		$sql = "update khachhang set tongtien = $tongtien where tenkhachhang = $makh";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
		var_dump($sql);
	}
}

 ?>