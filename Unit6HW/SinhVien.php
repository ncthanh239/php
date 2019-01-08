<?php 
	class SinhVien extends Nguoi{
		var $msv;
		var $lop;
		var $hanhkiem;
		var $hocluc;
		var $chieucao;
		var $cannang;

		function InTT(){
			parent::InTT();
			echo "<br>Ma sinh vien: ".$this->msv;
			echo "<br>Lop: ".$this->lop;
			echo "<br>Hanh kiem: ".$this->hanhkiem;
			echo "<br>Hoc luc: ".$this->hocluc;
			echo "<br>Chieu cao: ".$this->chieucao;
			echo "<br>Can nang: ".$this->cannang;
		}

	}
 ?>