<?php 
include_once('helpers/Middleware.php');
	$middleware = new Middleware();
	session_start();
	$mod='home';
	$act='act';

if(isset($_GET['mod'])){
	$mod = $_GET['mod'];
}

if(isset($_GET['act'])){
	$act = $_GET['act'];
}



switch ($mod) {
		//Chon chuc nang vao san pham

	case 'product':{
		$middleware->isLogin();
		include_once('controllers/ProductController.php');
		$productController=new ProductController();
		switch ($act) {
			case 'list':
			$productController->list();
			break;

			case 'detail':
			$productController->detail();
			break;

			case 'add':
			$productController->add();
			break;
			case 'store':
			$productController->store();
			break;

			case 'edit':
			$productController->edit();
			break;	

			case 'update':
			$productController->update();
			break;

			case 'delete':
			$productController->delete();
			break;

			
			default:
			echo "Khong ton tai phuong thuc";
			break;
		}	
	}
	break;
	case 'customer':{
		$middleware->isLogin();
		include_once('controllers/CustomerController.php');
		$customerController=new CustomerController();
		switch ($act) {
			case 'list':
			$customerController->list();
			break;

			case 'detail':
			$customerController->detail();
			break;

			case 'add':
			$customerController->add();
			break;

			case 'store':
			$customerController->store();
			break;

			case 'edit':
			$customerController->edit();
			break;	

			case 'update':
			$customerController->update();
			break;

			case 'delete':
			$customerController->delete();
			break;

			default:
			echo "Khong ton tai phuong thuc";
			break;
		}	
	}
	break;
	case 'employee':{
		$middleware->isLogin();
		include_once('controllers/EmployeeController.php');
		$employeeController=new EmployeeController();
		switch ($act) {
			case 'list':
			$employeeController->list();
			break;

			case 'detail':
			$employeeController->detail();
			break;

			case 'add':
			$employeeController->add();
			break;

			case 'store':
			$employeeController->store();
			break;

			case 'edit':
			$employeeController->edit();
			break;	

			case 'update':
			$employeeController->update();
			break;	

			case 'delete':
			$employeeController->delete();
			break;	

			default:
			echo "Khong ton tai phuong thuc";
			break;
		}	
	}
	break;

	case 'home':{
		$middleware->isLogin();
		switch ($act) {
			case 'act':
			require_once('views/home/home.php');
			break;

			default:
			echo "Khong ton tai phuong thuc";
			break;
		}	
	}
	break;

	case 'login':{
		include_once('controllers/LoginController.php');
		$loginController=new LoginController();
		switch ($act) {
			case 'form':
			$loginController->formLogin();
			break;

			case 'postLogin':
			$loginController->login();
			break;

			case 'logout':
			$loginController->logout();
			break;

			default:
			echo "Khong ton tai phuong thuc";
			break;
		}	
	}
	break;

	default:
	echo "Khong ton tai phuong thuc";
	break;
}
?>