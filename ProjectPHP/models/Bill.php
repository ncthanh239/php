<?php 
	include_once('models/Model.php');
	class Bill extends Model{
		var $table_name = 'hoadon';
		var $primary_key = 'MaHD';
		var $bill_conn;
		public function __construct(){
			$connection = new Connection();
			$this->bill_conn=$connection->conn;
		}
		public function ListBillByEmpl($Empl){
			if($Empl == ''){
				$where='';
			}else{
				$where = " WHERE hd.MaNV ='" .$Empl."'";
			}
			// $connection = new Connection();
			// $this->bill_conn=$connection->conn;
			$data = array();
			$query = "SELECT hd.*,kh.TenKH,nv.TenNV FROM hoadon hd join khachhang kh ON hd.MaKH=kh.MaKH Join nhanvien nv ON nv.MaNV = hd.MaNV ".$where;

			$result=$this->bill_conn->query($query);
			

			while($row = $result->fetch_assoc()){
				$data[]=$row;
			}
			return $data;
		}
	}


 ?>