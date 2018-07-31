<?php 
require_once "BaseModel.php";
/**
* 
*/
class LoginModel extends BaseModel
{
	public function login($user, $pass){
		$model = new static();
		$pass = md5($pass);
		$sql = "select * from admin where username='$user' and password='$pass'";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();	
		$result	= $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}

}


 ?>