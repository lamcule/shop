<?php 
	/**
	* 
	*/
	if (session_id() == "") {
		session_start();
	}

	class LogoutController{

		function logout(){
			session_destroy();
			header("Location:login");
		}

	}
?>