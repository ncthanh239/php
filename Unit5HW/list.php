<?php 
	session_start();
	if(isset($_SESSION['save'])){
	if($_SESSION['save']=="deleted"){
		echo "<b>Xóa thành công sinh viên!</b>";
		// setcookie('dmsg','Đã xóa thành công sinh viên!',time()+1);
	}else if($_SESSION['save']=="done"){
		// setcookie('domsg','Thêm thành công sinh viên!',time()+1);
		echo "<b>Thêm thành công sinh viên!</b>";
	}
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
		table tr td{
			color: green;
		}
		b{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 align="center">DANH SÁCH SINH VIÊN</h3>
		<a href="bai1a.php" class="btn btn-success">Thêm sinh viên >></a>
		<table class="table table-hover">
			<tr>
				<td align="center">Họ tên</td>
				<td align="center">Số điện thoại</td>
				<td align="center">Giới tính</td>
				<td align="center">Địa chỉ</td>
				<td align="center">#</td>
			</tr>
				<?php
					$i=0;
					$product= $_SESSION['sv'];
				 foreach ($product as $sv) { 
				 	$i++;
				 	?>
				<tr>
					<td align="center"><?= $sv['name'] ?></td>
					<td align="center"><?= $sv['phone'] ?></td>
					<td align="center"><?= $sv['sex'] ?></td>
					<td align="center"><?= $sv['address'] ?></td>
					
					<td align="center"><a href="delete.php?name=<?=$sv['name'] ?>" class="btn btn-warning">Xóa</a></td>
				</tr>
				
				<?php } ?>
		</table>
		
	</div>
	<!-- <p><?php if(isset($_COOKIE['dmsg'])) echo $_COOKIE['dmsg'] ?></p>
	<p><?php if(isset($_COOKIE['domsg'])) echo $_COOKIE['domsg'] ?></p> -->
</body>
</html>