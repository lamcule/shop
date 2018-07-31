<?php 
require_once 'BaseModel.php';
require_once 'TypeProduct.php';

class Product extends BaseModel{
	public $tableName = 'sanpham';
	public $columns = ['id', 'tensanpham','maloai','gia','soluong','thongtin','anh','ngaynhap','salepercent','giasale','yeuthich','trangthai'];

	public function getTenLoai(){
		$loaisanpham = TypeProduct::find($this->maloai);
		return $loaisanpham->tenloai;
	}
	public function updateAmount($soluong,$masp){
		$model = new static();
		$sql = "update sanpham set soluong = $soluong where id ='$masp'";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public function search($text){
		$model = new static();
		$sql = "select * from sanpham where tensanpham like '%$text%'";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
}

 ?>