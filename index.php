<?php 
$url = isset($_GET['url']) == true ? $_GET['url'] :'/';
require_once 'controllers/AdminController.php';
require_once 'controllers/CustomerController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/TypeProductController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/LogoutController.php';
require_once 'controllers/HomePageController.php';
require_once 'controllers/CartController.php';
require_once 'controllers/LoginUserController.php';
require_once 'controllers/OrderController.php';
// require_once 'controllers/RegistrationController.php';
require_once 'controllers/OrderDetailController.php';
require_once 'controllers/DoanhThuController.php';

switch ($url) {
	
	case '/':
		$ctl = new LoginController();
		$ctl->index();
		break;
	case 'search':
		$ctl = new ProductController();
		$ctl->search();
		break;
	case 'homepage':
		$ctl = new HomePageController();
		$ctl->index();
		break;
	case 'trousers':
		$ctl= new HomePageController();
		$ctl->trouser();
		break;
	case 'shirts':
		$ctl= new HomePageController();
		$ctl->shirt();
		break;
	case 'accessories':
		$ctl= new HomePageController();
		$ctl->accessory();
		break;	
	case 'sign-up':
		$ctl = new HomePageController();
		$ctl->create();
		break;
	// case 'sign-in':
	// 	include_once 'views/customer/customers/signin.php';
	// 	break;
	case 'contact':
		include_once 'views/customer/clients/contact.php';
		break;			
	case 'save-sign-up':
		$ctl = new HomePageController();
		$ctl->saveSignUp();
		break;
	case 'update-info-customer':
		$ctl = new HomePageController();
		$ctl->updateInfoCustomer();
		break;	
	case 'save-update-info-customer':
		$ctl = new HomePageController();
		$ctl->saveUpdateInfoCustomer();
		break;
	// case 'register':
	// 	$ctl = new RegistrationController();
	// 	$ctl->register();
	// 	break;
	// case 'save-register':
	// 	$ctl = new RegistrationController();
	// 	$ctl->saveRegister();
	// 	break;	
	case 'sign-in':
		$ctl = new LoginUserController();
		$ctl->index();
		break;
	case 'sign-in-user':
		$ctl = new LoginUserController();
		$ctl->loginTK();
		break;
	case 'sign-out':
		$ctl = new LoginUserController();
		$ctl->logout();
		break;	
	case 'detail-cart':
		include 'views/customer/customers/cart.php';
		break;	
	case 'thanh-toan':
		$ctl = new OrderController();
		$ctl->index();
		break;	
	case 'save-order':
		$ctl = new OrderController();
		$ctl->saveOrder();
		break;
	case 'admins':
		$ctl = new AdminController();
		$ctl->index();
		break;	
	case 'create-admin':
		$ctl = new AdminController();
		$ctl->create();
		break;
	case 'save-admin':
		$ctl = new AdminController();
		$ctl->saveAdmin();
		break;	
	case 'update-admin':
		$ctl = new AdminController();
		$ctl->updateAdmin();
		break;
	case 'save-update-admin':
		$ctl = new AdminController();
		$ctl->saveUpdateAdmin();
		break;
	case 'delete-admin':
		$ctl = new AdminController();
		$ctl->deleteAdmin();
		break;
	case 'customers':
		$ctl = new CustomerController();
		$ctl->index();
		break;	
	// case 'create-customer':
	// 	$ctl = new CustomerController();
	// 	$ctl->create();
	// 	break;
	// case 'save-customer':
	// 	$ctl = new CustomerController();
	// 	$ctl->saveCustomer();
	// 	break;	
	case 'update-customer':
		$ctl = new CustomerController();
		$ctl->updateCustomer();
		break;
	case 'save-update-customer':
		$ctl = new CustomerController();
		$ctl->saveUpdateCustomer();
		break;
	case 'delete-customer':
		$ctl = new CustomerController();
		$ctl->deleteCustomer();
		break;
	case 'typeproducts':
		$ctl = new TypeProductController();
		$ctl->index();
		break;
	case 'create-typeproduct':
		$ctl = new TypeProductController();
		$ctl->create();
		break;
	case 'save-typeproduct':
		$ctl = new TypeProductController();
		$ctl->saveTypeProduct();
		break;
	case 'update-typeproduct':
		$ctl = new TypeProductController();
		$ctl->updateTypeProduct();
		break;
	case 'save-update-typeproduct':
		$ctl = new TypeProductController();
		$ctl->saveUpdateTypeProduct();
		break;
	case 'delete-typeproduct':
		$ctl = new TypeProductController();
		$ctl->deleteTypeProduct();
		break;	
	case 'products':
		$ctl = new ProductController();
		$ctl->index();
		break;	
	case 'create-product':
		$ctl = new ProductController();
		$ctl->create();
		break;		
	case 'save-product':
		$ctl = new ProductController();
		$ctl->saveProduct();
		break;	
	case 'update-product':
		$ctl = new ProductController();
		$ctl->update();
		break;
	case 'save-update-product':
		$ctl = new ProductController();
		$ctl->saveUpdateProduct();
		break;
	case 'delete-product':
		$ctl = new ProductController();
		$ctl->deleteProduct();
		break;
	case 'detail-product':
		$ctl = new ProductController();
		$ctl->detailProduct();
		break;
	case 'orders':
		$ctl = new OrderController();
		$ctl->indexAdmin();
		break;
	case 'update-order':
		$ctl = new OrderController();
		$ctl->update();
		break;
	case 'save-update-order':
		$ctl = new OrderController();
		$ctl->saveUpdateOrder();
		break;
	case 'detail-order':
		$ctl = new OrderDetailController();
		$ctl->index();
		break;			
	case 'login':
		$ctl = new LoginController();
		$ctl->index();
		break;
	case 'loginTK':
		$ctl = new LoginController();
		$ctl->loginTK();
		break;
	case 'logout':
		$ctl = new LogoutController();
		$ctl->logout();
		break;
	case 'doanh-thu':
		$ctl = new DoanhThuController();
		$ctl->total();
		break;
	default:
		echo "<h1>Oops! Page not found</h1>";
		break;
}


 ?>