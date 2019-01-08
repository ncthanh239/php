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
	    	$maKH=$_POST['MaKH'];
	    	$tenKH=$_POST['MaKH'];
	    	$sdt=$_POST['MaKH'];
	    	$email=$_POST['MaKH'];
	    	$diaChi=$_POST['DiaChi'];

	    	echo "<br>".$maKH;
	    	echo "<br>".$tenKH;
	    	echo "<br>".$sdt;
	    	echo "<br>".$email;
	    	echo "<br>".$diaChi;

	    	$query="INSERT INTO khachhang (MaKH,TenKH,SDT,Email,DiaChi) values ('".$maKH."','".$tenKH."','".$sdt."','".$email."','".$diaChi."')";
	    	$status=$conn->query($query);

	    	if($status==1){
	    		setcookie('msg','Thêm mới thành công',time()+1);
	    	}else{
	    		setcookie('msg','Thêm mới không thành công',time()+1);
	    	}
	    	header('Location: test_customers.php');

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
 			<h3><b>ADD NEW CUSTOMER</b></h3>
 		
 			<div class="form-group">
 				<label for="">Mã KH</label>
 				<input type="text" class="form-control" id="" name="MaKH">
 			</div>
 			<div class="form-group">
 				<label for="">Tên KH</label>
 				<input type="text" class="form-control" id="" name="TenKH">
 			</div>
 			<div class="form-group">
 				<label for="">SĐT</label>
 				<input type="number" class="form-control" id="" name="SDT">
 			</div>
 			<div class="form-group">
 				<label for="">Email</label>
 				<input type="text" class="form-control" id="" name="Email">
 			</div>
 			<div class="form-group">
 				<label for="">Địa chỉ</label>
 				<input type="text" class="form-control" id="" name="DiaChi">
 			</div>
 		
 			
 		
 			<button type="submit" class="btn btn-primary" name="save">Thêm mới</button>
 		</form>
 	</div>
 </body>
 </html>