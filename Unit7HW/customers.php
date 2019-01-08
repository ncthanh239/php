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
 	<style type="text/css">
 		h3{
 			color: red;
 		}
 		td{
 			color: green;
 		}

 	</style>
 </head>
 <body>
 	<div class="container">
 		<h3 align="center"><b>CUSTOMERS LIST</b></h3>
 		<a href="customer_add.php" class="btn btn-success" title="">Add</a>
 		<p><?php if(isset($_COOKIE['msg'])){ ?>
			<div class="alert alert-success" role="alert">
				<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
			</div>
 		<?php } ?></p>
 	<table class="table table-bordered">
 		<thead>
 			<tr>
 				<th align="center">Mã KH</th>
 				<th align="center">Tên KH</th>
 				<th align="center">SĐT</th>
 				<th align="center">Email</th>
 				<th align="center">Địa Chỉ</th>
 				<th align="center">Hành Động</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php while($row = $result->fetch_assoc()) {  ?>
 			<tr>
 				<td align="center"><?php echo $row['MaKH'] ?></td>
 				<td><?php echo $row['TenKH'] ?></td>
 				<td align="center"><?php echo $row['SDT'] ?></td>
 				<td align="center"><?php echo $row['Email'] ?></td>
 				<td align="center"><?php echo $row['DiaChi'] ?></td>
 				<td align="center">
 					<a href="customer_detail.php?MaKH=<?php echo $row['MaKH'] ?>" class="btn btn-success" title="">Xem chi tiết</a>
 					<a href="customer_edit.php?MaKH=<?php echo $row['MaKH'] ?>" class="btn btn-primary" title="">Sửa</a>
 					<a href="customer_delete.php?MaKH=<?php echo $row['MaKH'] ?>" class="btn btn-danger" title="">Xóa</a>
 				</td>
 				
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 	</div>
 </body>
 </html>