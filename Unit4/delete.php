<?php 
	session_start();
	$code = $_GET['code'];

	// unset($_SESSION['cart'][$code]);
	
	if($_SESSION['cart'][$code][3] > 1){
		$_SESSION['cart'][$code][3]--;
		setcookie('msg','Xóa thành công sản phẩm !',time()+1);
	}else{
		unset($_SESSION['cart'][$code]);
		setcookie('msg','Xóa thành công sản phẩm !',time()+1);
	}
	header('Location: cart1.php');
 ?>