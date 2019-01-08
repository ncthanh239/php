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
	$maKH=trim($_GET['MaKH']);
	$query="SELECT* FROM khachhang where MaKH='".$maKH."'";
	$result=$conn->query($query);
	$customer=$result->fetch_assoc();
	if(isset($_POST['update'])){
		$maKH=$_POST['MaKH'];
		$tenKH=$_POST['TenKH'];
		$sdt=$_POST['SDT'];
		$email=$_POST['Email'];
		$diaChi=$_POST['DiaChi'];

		$query="UPDATE khachhang SET MaKH='".$maKH."',TenKH='".$tenKH."',SDT='".$sdt."',Email='".$email."',DiaChi='".$diaChi."'";
		echo $query;
		$status=$conn->query($query);
		if($status==1){
			setcookie('msg','Update thành công',time()+1);
		}else{
			setcookie('msg','Update không thành công',time()+1);
		}
		header('Location: customers.php');
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
 </head>
 <body>
 	<div class="container">
 		<form action="" method="POST" role="form">
			<h3 align="center"><b>ADD NEW CUSTOMER</b></h3>
			<a href="customers.php" class="btn btn-warning">Quay lại >></a>
			<br>
			<br>
			<div class="form-group">
				<label for="">Mã KH</label>
				<input type="text" class="form-control" id="" name="MaKH" placeholder="Nhập mã KH" value="<?=$customer['MaKH']?>" readonly>
			</div>
			<div class="form-group">
				<label for="">Tên KH</label>
				<input type="text" class="form-control" id="" name="TenKH" placeholder="Nhập tên KH" value="<?=$customer['TenKH']?>">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="number" class="form-control" id="" name="SDT" placeholder="Nhập số điện thoại" value="<?=$customer['SDT']?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" name="Email" placeholder="Nhập email" value="<?=$customer['Email']?>">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" name="DiaChi" placeholder="Nhập địa chỉ" value="<?=$customer['DiaChi']?>">
			</div>

			

			<button type="submit" class="btn btn-success" name="update" >Update</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			<a href="customers.php" class="btn btn-secondary">Trở về</a>
			
		</form>
 	</div>
 </body>
 </html>