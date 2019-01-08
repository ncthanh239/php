<?php 
	class Xe{
		var $tenXe;
		var $hangXe;
		public $mauSac;
		public $soCho;

		// function diChuyen(){
		// 	echo "<br> Xe chay nhanh";
		// }
		function InTT(){
			echo "<br>------------------------------";
			echo "<br>Ten xe:".$this->tenXe;
			echo "<br>Hang xe:".$this->hangXe;
			echo "<br>Mau sac:".$this->mauSac;
			echo "<br>So cho:".$this->soCho;
			echo "<br>";
		}
		function __construct(){
			echo "Phuong thuc khoi tao 2";
		}
		
	}
	class XeBo extends Xe{
			var $soBo;
			function diChuyen(){
				echo "<br>Xe bo dung bo de keo";
			}
		}
	//khoi tao dooi tuong
	
	$bmw = new Xe();
	//Gan gia tri cho cac thuoc tinh
	
	$bmw->tenXe="BMW X6";
	$bmw->hangXe="BMW";
	$bmw->mauSac="Trang";
	$bmw->soCho="5";
	//Goi phuong thuc
	
	// $bmw->diChuyen();
	$bmw->InTT();

	$xebo = new XeBo();
	$xebo->diChuyen();
	//Goi thuoc tinh va in ra
	// echo "<br>------------------------------";
	// echo "<br>THONG TIN XE";
	// echo "<br>Ten xe:".$bmw->tenXe;
	// echo "<br>Hang xe:".$bmw->hangXe;
	// echo "<br>Mau sac:".$bmw->mauSac;
	// echo "<br>So cho:".$bmw->soCho;
	// echo "<br>";
 ?>