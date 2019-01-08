<?php 
	include_once('models/Bill.php');

	class BillController{
		public function dshoadon(){
			$billmd= new Bill();
			// $bills = $billmd->All();

			$pills=$billmd->ListBillByEmpl('');
			// var_dump($pills);
			require_once('views/hoadon/dshoadon.php');
		}

	}



 ?>