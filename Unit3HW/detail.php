<?php 
	session_start();
	if(isset($_GET['msv'])){
		$msv=$_GET['msv'];
	}
	echo "<h3>Thong tin sinh vien</h3>";
	echo "<b>Ten: </b>".$_SESSION['tt_sinhvien'][$msv]['ten'];
	echo "<br><b>Tuoi: </b>".$_SESSION['tt_sinhvien'][$msv]['tuoi'];
	echo "<br><b>Truong: </b>".$_SESSION['tt_sinhvien'][$msv]['truong'];
?>