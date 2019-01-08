<?php 

	require_once('models/Employee.php');
	class LoginController{
		public function formLogin(){
			//trả về form để login
			if(isset($_SESSION['isLogin'])){
				header('Location: ?mod=home&act=act');
			}
			require_once('views/auth/login.php');
		}
		public function Login(){
			$email = $_POST['Email'];
			$matkhau = $_POST['MatKhau'];

			$_SESSION['old']['Email']=$email;

			$employeeModel = new Employee();
			$result = $employeeModel->checkLogin($email,$matkhau);


			if($result != null){	
				$_SESSION['isLogin'] = true;
				$_SESSION['user'] = $result;
				unset($_SESSION['old']['Email']);
				header('Location: ?mod=home&act=act'); 
			}else{
				header('Location: ?mod=login&act=form');
			}
		}
		public function Logout(){
			session_destroy();
			header('Location: ?mod=login&act=form');
		}
	}


 ?>