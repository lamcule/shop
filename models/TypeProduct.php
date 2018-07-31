<?php 
require_once 'models/BaseModel.php';

class TypeProduct extends BaseModel{
	public $tableName = 'loaisanpham';
	public $columns = ['id','tenloai', 'trangthai'];
}

 ?>