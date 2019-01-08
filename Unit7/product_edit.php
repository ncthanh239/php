<?php 
	require_once('connection.php');
		$masp=trim($_GET['MaSP']);
		$query="SELECT* FROM sanpham where MaSP='".$masp."'";
		$result=$conn->query($query);

		$product=$result->fetch_assoc();
	if(isset($_POST['update'])){
		$masp=$_POST['MaSP'];
		$tensp=$_POST['TenSP'];
		$dongia=$_POST['DonGia'];
		$soluong=$_POST['SoLuong'];

		$query="UPDATE sanpham SET MaSP='".$masp."',TenSP='".$tensp."',DonGia='".$dongia."',SoLuong='".$soluong."' where MaSP='".$masp."'";

		
		$status=$conn->query($query);
		if($status==1){
			setcookie('msg','Update thành công',time()+1);
		}else{
			setcookie('msg','Update không thành công',time()+1);
		}
		header('Location: products.php');
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
			<legend>ADD NEW PRODUCT</legend>
		
			<div class="form-group">
				<label for="">Mã SP</label>
				<input readonly type="text" class="form-control" id="" name="MaSP" placeholder="Nhập mã SP" value="<?=$product['MaSP']?>">
			</div>
			<div class="form-group">
				<label for="">Tên SP</label>
				<input type="text" class="form-control" id="" name="TenSP" placeholder="Nhập tên SP" value="<?=$product['TenSP']?>">
			</div>
			<div class="form-group">
				<label for="">Số Lượng</label>
				<input type="number" class="form-control" id="" name="SoLuong" placeholder="Nhập số lượng SP" value="<?=$product['SoLuong']?>">
			</div>
			<div class="form-group">
				<label for="">Đơn giá</label>
				<input type="number" class="form-control" id="" name="DonGia" placeholder="Nhập đơn giá SP" value="<?=$product['DonGia']?>">
			</div>
		
			
		
			<button type="submit" class="btn btn-success" name="update" >Update</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			<a href="products.php" class="btn btn-secondary">Trở về</a>
		</form>
	</div>
</body>
</html>