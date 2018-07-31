<?php 
/**
* 
*/
error_reporting(0);

if (session_id() == "") {
	session_start();
}
require_once 'models/Login.php';
class LoginController
{
	
	public function index(){
		if ($_SESSION['admin'] == '') {
			include_once 'views/admin/login/login.php';
		} else {
			header("location:doanh-thu");
		}
	}
	
	public function loginTK(){
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$loginModel = new LoginModel();
		$login = $loginModel->login($user,$pass);
		if ($login == true) {
			$_SESSION['admin'] = array(
				"username" => $user,
				"password" => $pass
			);
			header("location:doanh-thu");
		}
		else{
			header("location:login");
		}
	}
}


 ?>