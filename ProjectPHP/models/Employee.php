<?php 
//Riêng thư mục model không thêm model đằng sau file
include_once('models/Connection.php');
include_once('models/Model.php');
class Employee extends Model{
	var $table_name = 'nhanvien';
	var $primary_key = 'MaNV';
	var $employee_conn;

	public function __construct(){
		$connection = new Connection();
		$this->employee_conn = $connection->conn;
	}
	public function  checkLogin($email, $matkhau){
		$query = "SELECT * FROM nhanvien WHERE Email = '".$email."' and MatKhau = '".$matkhau."'";


		$result = $this->employee_conn->query($query);

		return  $result->fetch_assoc();
	}
	public function FindNV($email,$matkhau){
		$connection = new Connection();
		$this->employee_conn=$connection->conn;
		$query=" SELECT * FROM nhanvien WHERE Email='".$email."'and MatKhau='".$matkhau."' ";
        // echo $query;
        // die;
		$result = $this->employee_conn->query($query);
		return $result->fetch_assoc();

	}
}
?>

