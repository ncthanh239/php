<?php 
	session_start();
	// session_destroy();
	if(isset($_POST['save'])){
		$msv=$_POST['msv'];
		$ten=$_POST['ten'];
		$tuoi=$_POST['tuoi'];
		$truong=$_POST['truong'];


		$_SESSION['tt_sinhvien'][$msv]=[
			'msv'=>$msv,
			'ten'=>$ten,
			'tuoi'=>$tuoi,
			'truong'=>$truong
		];

		header('Location: list.php');
	}
 ?>