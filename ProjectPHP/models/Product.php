<?php 
	//Riêng thư mục model không thêm model đằng sau file
	// include_once('models/Connection.php');
	include_once('models/Model.php');
	class Product extends Model{
		var $table_name = 'sanpham';
		var $primary_key = 'MaSP';

		public function reduceQuant($maSP,$soLuong){
			$connection = new Connection();

			$this->product_conn = $connection->conn;
			$soLuongCon=$this->getQuant($maSP)-$soLuong;

			$query= "UPDATE ".$this->table_name." SET SoLuong = ".$soLuongCon." WHERE ".$this->primary_key." = '".$maSP."' ";

			$result = $this->product_conn->query($query);
			return $result;
		}

		public function getQuant($maSP){
			$connection = new Connection();
			$this->product_conn=$connection->conn;
			$query= "SELECT SoLuong FROM ".$this->table_name." WHERE ".$this->primary_key." = '".$maSP."' ";

			$result = $this->product_conn->query($query)->fetch_assoc()['SoLuong'];

			return $result;
		}
	}
	
?>