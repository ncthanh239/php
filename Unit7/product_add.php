<?php 
	require_once('connection.php');
		$masp='';
		$tensp='';
		$dongia='';
		$soluong='';

	if(isset($_POST['save'])){
		$masp=$_POST['MaSP'];
		$tensp=$_POST['TenSP'];
		$dongia=$_POST['DonGia'];
		$soluong=$_POST['SoLuong'];

		$query="SELECT COUNT(*) AS NUM_ROW from sanpham where MaSP='".$masp."'";
		$status=$conn->query($query);
		$product=$status->fetch_assoc();
		$numb=$product['NUM_ROW'];
		if($numb >=1){
			echo "Sản phẩm đã tồn tại";
		}else{


		// echo "<br>".$masp;
		// echo "<br>".$tensp;
		// echo "<br>".$soluong;
		// echo "<br>".$dongia;

		$query="INSERT INTO sanpham (MaSP,TenSP,SoLuong,DonGia) 
		VALUES ('" .$masp."','" .$tensp."','" .$soluong."','" .$dongia."')";

		if($status==1){
			setcookie('msg','Thêm mới thành công',time()+1);
		}else{
			setcookie('msg','Thêm mói không thành công',time()+1);
		}
		header('Location: products.php');
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
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<legend>ADD NEW PRODUCT</legend>
		
			<div class="form-group">
				<label for="">Mã SP</label>
				<input type="text" class="form-control" id="" name="MaSP" placeholder="Nhập mã SP" value="<?= $masp?>">
			</div>
			<div class="form-group">
				<label for="">Tên SP</label>
				<input type="text" class="form-control" id="" name="TenSP" placeholder="Nhập tên SP">
			</div>
			<div class="form-group">
				<label for="">Số Lượng</label>
				<input type="number" class="form-control" id="" name="SoLuong" placeholder="Nhập số lượng SP">
			</div>
			<div class="form-group">
				<label for="">Đơn giá</label>
				<input type="number" class="form-control" id="" name="DonGia" placeholder="Nhập đơn giá SP">
			</div>
		
			
		
			<button type="submit" class="btn btn-success" name="save" >Lưu thông tin</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			<a href="products.php" class="btn btn-secondary">Trở về</a>
		</form>
	</div>
</body>
</html>