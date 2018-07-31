<?php 
/**
* 
*/
error_reporting(0);

if (session_id() == "") {
	session_start();
}
require_once 'models/Customer.php';
class LoginUserController
{
	
	public function index(){
		if ($_SESSION['user'] == '') {
			include_once 'views/customer/customers/signin.php';
		} else {
			header("location:homepage");
		}
	}
	
	public function loginTK(){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		// var_dump($user);die;
		$loginUserModel = new Customer();
		$login = $loginUserModel->login($user,$pass);
		if ($login == true) {
			$_SESSION['user'] = array(
				"username" => $user,
				"password" => $pass
			);
			header("location:homepage");
		}
		else{
			header("location:sign-in");
		}
	}
	public function logout(){
			session_destroy();
			header("Location:homepage");
		}
}


 ?>