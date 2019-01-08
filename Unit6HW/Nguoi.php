<?php 
	class Nguoi{
		var $ten;
		var $ngaySinh;
		var $queQuan;
		var $gioiTinh;

		function InTT(){
			echo "<br>Ten: ".$this->ten;
			echo "<br>Ngay sinh: ".$this->ngaySinh;
			echo "<br>Que quan: ".$this->queQuan;
			echo "<br>Gioi tinh: ".$this->gioiTinh;
		}
	}
	
 ?>