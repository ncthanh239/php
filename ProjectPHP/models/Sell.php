<?php 
include_once('models/Connection.php');

class Sell{
	var $sell_conn;
	public function All(){
		$connection = new Connection();
		$this->sell_conn=$connection->conn;
		$data = array();

		$query="SELECT * FROM khachhang";
		$result=$this->sell_conn->query($query);

		while($row = $result->fetch_assoc()) { 
			$data[]=$row;

		}
		return $data;
	}

	public function find($maKH){
		$connection = new Connection();
		$this->sell_conn=$connection->conn;
		$data = array();

			// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM khachhang where MaKH = '".$maKH."'";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->sell_conn->query($query);

		$sell = $result->fetch_assoc();

		return $sell;
	}

	public function AllSP(){
		$connection = new Connection();
		$this->sell_conn=$connection->conn;
		$data = array();

		$query="SELECT * FROM sanpham";
		$result=$this->sell_conn->query($query);

		while($row = $result->fetch_assoc()) { 
			$data[]=$row;

		}
		return $data;
	}
	
	public function findSP($maSP){
		$connection = new Connection();
		$this->sell_conn=$connection->conn;
		$data = array();

			// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM sanpham where MaSP = '".$maSP."'";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->sell_conn->query($query);

		$sell = $result->fetch_assoc();
		
		return $sell;
	}

}
?>