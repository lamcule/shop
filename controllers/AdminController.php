<?php 
require_once 'models/Admin.php';

class AdminController{
	public function index(){
		$admins = Admin::all();
		include_once 'views/admin/admins/index.php';
	}
	public function create(){
		$admins = Admin::all();
		include 'views/admin/admins/create.php';
	}

	public function saveAdmin(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$msg = "";
		if ($confirmpassword == $password) {
			$model = new Admin();
			$model->username = $username;
			$model->password = md5($password);
			$model->insert();
			header('location: admins');
		} else {
			$msg = "change fail";
			echo $msg."<br><a href='create-admin'>Return</a>";
		}
		
	}
	public function updateAdmin(){
		$id = $_GET['id'];
		$model = Admin::find($id);
		$admins = Admin::all();
		include 'views/admin/admins/update.php';
	}

	public function saveUpdateAdmin(){
		$id = $_POST['id'];
		$model = Admin::find($id);
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
		$msg = "";
		if (md5($oldpassword) == $model->password && $newpassword == $confirmpassword) {
			$msg = "change success";
			$model->password = md5($newpassword);
			$model->update();
			header("location:admins");
		}
		else {
			$msg = "change fail";
			echo $msg."<br><a href='admins'>Return</a>";
		}

	}
	
	public function deleteAdmin(){
		$id = $_GET['id'];
		$model = Admin::find($id);
		if ($model) {
			$model->delete();
			header('location: admins');
		}
	}
}



 ?>