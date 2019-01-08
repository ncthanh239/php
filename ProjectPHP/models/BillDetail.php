<?php 
	include_once('models/Model.php');
	class BillDetail extends Model{
		var $table_name="chitiethoadon";
		// var $primary_key="MaHD";
		var $bill_conn;

		// public function find($input){
		// 	$connection = new Connection();
		// 	$this->product_conn=$connection->conn;

		// 	// $query="SELECT * FROM ".$this->table_name." WHERE MaHD ='".$input."'";
		// 	$query="SELECT ct.*,sp.TenSP FROM chitiethoadon ct join sanpham sp ON ct.MaSP = sp.MaSP = sp.MaSP WHERE ct.MaHD= '".$input."'";

		// 	// echo $query;
		// 	// die;
		// 	$result=$this->product_conn->query($query);
		// 	$data=array();
		// 	while ($row=$result->fetch_assoc()) {
		// 		$data[]=$row;
		// 	}
			
		// 	return $data;
		// }
		
		public function all(){
			$connection = new Connection();
			$this->bill_conn=$connection->conn;
			$data=array();
			$query="SELECT hoadon.MaHD, khachhang.TenKH, nhanvien.TenNV, hoadon.NgayBan, hoadon.TongTien from hoadon join khachhang on hoadon.MaKH = khachhang.MaKH join nhanvien on nhanvien.MaNV=hoadon.MaNV";
			$result=$this->bill_conn->query($query);
			while ($row=$result->fetch_assoc()) {
		 		$data[]=$row;
			}
			return $data;
		}

		public function find($MaHD){
			$connection = new Connection();
			$this->bill_conn=$connection->conn;
			$data=array();

			$query="select chitiethoadon.*, sanpham.TenSP, khachhang.TenKH, khachhang.DiaChi, hoadon.NgayBan from chitiethoadon join hoadon on hoadon.MaHD = chitiethoadon.MaHD join khachhang on hoadon.MaKH = khachhang.MaKH join nhanvien on hoadon.MaNV = nhanvien.MaNV join sanpham on chitiethoadon.MaSP = sanpham.MaSP where chitiethoadon.MaHD = '".$MaHD."'";
			$result=$this->bill_conn->query($query);
			while ($row=$result->fetch_assoc()) {
		 		$data[]=$row;
			}
			return $data;
		}

	}
 ?>