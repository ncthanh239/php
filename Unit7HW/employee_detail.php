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
	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM nhanvien where MaNV = '".$maNV."'";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);
	$employee=$result->fetch_assoc();
	// while($row = $result->fetch_assoc()) { 
		  
	// echo "<pre>";
	// 	print_r($row);
	// echo "</pre>";
		  	   
        	 
 //    }

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
 		p{
 			color: green;
 		}
 	</style>
 </head>
 <body>
 	<div class="container">
 		<h3 align="center"><b>EMPLOYEES DETAILS</b></h3>
 		<a href="employees.php" class="btn btn-warning">Quay lại >></a>
 		<br><br>
 		<p>Mã nhân viên: <?php echo $employee['MaNV'] ?></p>
 		<p>Tên nhân viên: <?php echo $employee['TenNV'] ?></p>
 		<p>Email: <?php echo $employee['Email'] ?></p>
 		<p>Số điện thoại: <?php echo $employee['SDT'] ?></p>
 	</div>
 </body>
 </html>