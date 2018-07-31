<?php 
require_once("models/Product.php");
/**
 * 
 */
class CartController
{
	
	public function index(){
		$products = Product::all();
		include 'views/user/index.php';
	}
}

 ?>