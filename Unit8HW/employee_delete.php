<?php 
	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$maNV=$_GET['MaNV'];
	$query="DELETE FROM nhanvien where MaNV='".$maNV."'";
	
	$result=$conn->query($query);
	if($result==1){
			setcookie('msg','Xóa thành công',time()+1);
		}else{
			setcookie('msg','Xóa không thành công',time()+1);
		}
		header('Location: employees.php');
 ?>