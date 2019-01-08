<?php 
	$info = array();
	$info ['msv']='123456789';
	$info ['name']='Nguyen Chi Thanh';
	$info ['sdt']='01657839922';
	$info ['website']='www.ncthanh.vn';
	$info ['email']='michellenguyen239@gmail.com';
	$info ['diachi']='Bac Ninh';

	$subject =array('Java','PHP','Laravel');
	$info['subject']=$subject;

	echo "<pre>";
		print_r($info);
	echo "</pre>";

	echo "<br> <b>Ma sinh vien:</b>" . $info['msv'];
	echo "<br> <b>Ho Ten:</b>" . $info['name'];
	echo "<br> <b>So dien thoai:</b>" . $info['sdt'];
	echo "<br> <b>Website:</b>" . $info['website'];
	echo "<br> <b>Email:</b>" . $info['email'];
	echo "<br> <b>Dia chi:</b>" . $info['diachi'];
	echo "<br> <b>Mon hoc so 1:</b>" . $info['subject'][0];
	$monhoc=$info['subject'];
	echo "<br>" . $monhoc[0];


 ?>