<?php 
	include("Nguoi.php");
	include("SinhVien.php");
	$nguoi= new Nguoi();
	$nguoi->ten="Nguyen Van A";
	$nguoi->ngaySinh="01/02/1998";
	$nguoi->queQuan="Ha noi";
	$nguoi->gioiTinh="Nam";
	$nguoi->InTT();
	echo "<br>--------------------------";
	$sv = new SinhVien();
	$sv->ten="Nguyen Van B";
	$sv->ngaySinh="03/04/1998";
	$sv->queQuan="Bac ninh";
	$sv->gioiTinh="Nam";
	$sv->msv="12345678";
	$sv->lop="DHTI10";
	$sv->hocluc="Gioi";
	$sv->hanhkiem="Tot";
	$sv->cannang="70kg";
	$sv->chieucao="1m85";
	$sv->InTT();
 ?>