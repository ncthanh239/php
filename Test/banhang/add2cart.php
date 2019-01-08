<?php 
	session_start();
	$products = array(
		'SP01'=>array('SP01','IP 4','4000000','10'),
		'SP02'=>array('SP02','IP 5','6000000','20'),
		'SP03'=>array('SP03','IP 6','8000000','30'),
		'SP04'=>array('SP04','IP 7','10000000','50'),
		'SP05'=>array('SP05','IP X','20000000','10'),
	);
	//B1: lay ma sp nguoi mua chon dua vao bien $code
	$code = $_GET['code'];
	if(isset($_SESSION['cart'][$code])){
		$_SESSION['cart'][$code][3]++;
		setcookie('msgs','Thêm thành công sản phẩm!', time()+1);
	}else{
		setcookie('msgs','Thêm thành công sản phẩm!', time()+1);

	
	//B2: lay toan bo thong tin san pham thong qua $code gan vao bien $product
	$product = $products[$code];

	//B3: Gan so luong mua = 1
	$product[3]=1;

	//B4: dua san pham vao session gio hang
	$_SESSION['cart'][$code] = $product;
	}
	//B5: chuyen ve trang danh sach san pham trong gio hang
	// echo "<pre>";
	// 	print_r($_SESSION['cart']);
	// echo "</pre>";
	header('Location: cart.php');
 ?>