<?php 
session_start();
	if(isset($_GET['msv'])){
		//ma sinh vien lay theo phuong thuc get
		$msv = $_GET['msv'];
		//xoa sinh vien theo phuong thuc session
		unset($_SESSION['tt_sinhvien'][$msv]);
	}
	header('Location: list.php');
 ?>