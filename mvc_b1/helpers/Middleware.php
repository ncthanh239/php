<?php 
	class Middleware{
		public function isLogin(){
			if(!isset($_SESSION['isLogin'])){
				//chua ton tai login
				header('Location: ?mod=login&act=form');
			}
		}
	}
 ?>