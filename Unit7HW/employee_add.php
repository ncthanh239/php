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

	if(isset($_POST['save'])){
		$maNV=$_POST['MaNV'];
		$tenNV=$_POST['TenNV'];
		$email=$_POST['Email'];
		$sdt=$_POST['SDT'];
		$matKhau=$_POST['MatKhau'];


		echo "<br>".$maKH;
		echo "<br>".$tenKH;
		echo "<br>".$email;
		echo "<br>".$sdt;
		echo "<br>".$matKhau;
		
		$query="INSERT INTO nhanvien (MaNV,TenNV,Email,SDT,MatKhau) 
		VALUES ('" .$maNV."','" .$tenNV."','" .$email."','" .$sdt."','" .$matKhau."')";
		$status=$conn->query($query);
		if($status==1){
			setcookie('msg','Thêm mới thành công',time()+1);
		}else{
			setcookie('msg','Thêm mói không thành công',time()+1);
		}
		header('Location: employees.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		h3{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<h3 align="center"><b>ADD NEW EMPLOYEE</b></h3>
		<a href="employees.php" class="btn btn-warning">Quay lại >></a>
		<br>
		<br>
			<div class="form-group">
				<label for="">Mã NV</label>
				<input type="text" class="form-control" id="" name="MaNV" placeholder="Nhập mã NV">
			</div>
			<div class="form-group">
				<label for="">Tên NV</label>
				<input type="text" class="form-control" id="" name="TenNV" placeholder="Nhập tên NV">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" name="Email" placeholder="Nhập email">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="number" class="form-control" id="" name="SDT" placeholder="Nhập số điện thoại">
			</div>
			<div class="form-group">
				<label for="">Mật khẩu</label>
				<input type="password" class="form-control" id="" name="MatKhau" placeholder="Nhập mật khẩu">
			</div>
		
			
		
			<button type="submit" class="btn btn-success" name="save" >Lưu thông tin</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			
		</form>
	</div>
</body>
</html>