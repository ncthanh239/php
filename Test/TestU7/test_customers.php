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

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM khachhang";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

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
 </head>
 <body>
 	<div class="container">
 		<h3 align="center">CUSTOMERS LIST</h3>
 		<a href="test_customer_add.php" class="btn btn-primary">Thêm mới</a>
 		<p><?php if(isset($_COOKIE['msg']))
 			echo $_COOKIE['msg'];
 		 ?></p>
 		<table class="table table-bordered table-hover">
 			<thead>
 				<tr>
 					<th>Mã KH</th>
 					<th>Tên KH</th>
 					<th>SĐT</th>
 					<th>Email</th>
 					<th>Địa Chỉ</th>
 					<th>Hành động</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php while($row = $result->fetch_assoc()) { ?>
 				<tr>
 					<td><?php echo $row['MaKH'] ?></td>
 					<td><?php echo $row['TenKH'] ?></td>
 					<td><?php echo $row['SDT'] ?></td>
 					<td><?php echo $row['Email'] ?></td>
 					<td><?php echo $row['DiaChi'] ?></td>
 					<td>
 						<a href="test_customer_detail.php?MaKH=<?php echo $row['MaKH'] ?>" class="btn btn-success">Xem chi tiết</a>
 					</td>
 				</tr>
 				<?php } ?>
 			</tbody>
 		</table>
 	</div>
 </body>
 </html>