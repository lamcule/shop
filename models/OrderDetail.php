<?php 
require_once 'BaseModel.php';

class OrderDetail extends BaseModel
{

	public $tableName = 'ctdonhang';
	public $columns = ['madh', 'masp', 'soluong', 'gia'];
	public function updateStatus($madh){
		$model = new static();
		$sql = "update ctdonhang set trangthai = 1 where madh ='$madh'";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public function getAmountProduct($madh){
		$model = new static();
		$sql = "select masp,soluong from ctdonhang where madh = $madh";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public function getAmount(){
		$model = new static();
		$sql = "select * from ctdonhang where trangthai = 1";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	
}


 ?>