<?php 
require_once 'BaseModel.php';
require_once 'Customer.php';

/**
 * 
 */
class Order extends BaseModel
{
	
	public $tableName = "donhang";
	public $columns = ["makh","tongtien","ngayGiaohang","ngayDathang","ghichu","trangthai"];
	
	// public function getTotalAmount($makh){
	// 	$model = new static();
	// 	$sql = "SELECT makh,SUM(tongtien) as tonghoadon FROM `donhang` WHERE makh = $makh and trangthai = 1  GROUP BY makh";
	// 	$stmt = $model->connect->prepare($sql);
	// 	$stmt->execute();	
	// 	$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
	// 	return $result;
	// }
	public function updateQuantity(){
		$model = new static();
		$sql = "select masp,soluong from ctdonhang where masp = $id ";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public static function finded($id){
		$model = new static();
		$sql = "select * from $model->tableName where madh = $id";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS,get_class($model));
		if ($result) return $result[0];
		return null;
	}
	public function updated(){
		$this->queryBuilder = "update $this->tableName set ";
		foreach ($this->columns as $col) {
			if ($this->{$col} == null) {
				continue;
			}
			$this->queryBuilder .= "$col = '". $this->{$col}."', ";
		}
		$this->queryBuilder = rtrim($this->queryBuilder, ", ");
		$this->queryBuilder .= " where madh = $this->madh";
		// var_dump($this->queryBuilder);die;
		$stmt = $this->connect->prepare($this->queryBuilder);
		try {
			$stmt->execute();
			return $this;
		} catch (Exception $ex) {
			var_dump($ex->getMessage());die;
		}
		
	}
	public function getMadh(){
		$model = new static();
		$sql = "select madh from donhang where trangthai = 1";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public function getTenKh(){
		$khachhang = Customer::find($this->makh);
		return $khachhang->tenkhachhang;
	}
	public function getTotal(){
		$model = new static();
		$sql = "select * from donhang where trangthai = 1";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public function getTotalCustomer($madh){
		$model = new static();
		$sql = "select * from donhang where madh = $madh";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}

}



 ?>