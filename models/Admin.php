<?php 
require_once 'BaseModel.php';
class Admin extends BaseModel{
	public $tableName = 'admin';
	public $columns = ['id','username','password'];
}



 ?>