<?php 
	session_start();
	if(isset($_GET['msv'])){
		$msv=$_GET['msv'];
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
		<form action="editprocess.php?msv=<?= $msv ?>" method="POST" role="form">
			<legend>Nhap thong tin sinh vien</legend>

			<div class="form-group">
				<label for="">Ma sinh vien</label>
				<input type="text" class="form-control" name="msv" id="" placeholder="Nhap ma sinh vien" value="<?= $_SESSION['tt_sinhvien'][$msv]['msv']?>" disabled>
			</div>
			<div class="form-group">
				<label for="">Ten</label>
				<input type="text" class="form-control" name="ten" id="" placeholder="Nhap ma ten vien" value="<?= $_SESSION['tt_sinhvien'][$msv]['ten']?>">
			</div>

			<div class="form-group">
				<label for="">Tuoi</label>
				<input type="text" class="form-control" id="" name="tuoi" placeholder="Nhap ma tuoi vien" value="<?= $_SESSION['tt_sinhvien'][$msv]['tuoi']?>">
			</div>

			<div class="form-group">
				<label for="">Truong</label>
				<input type="text" class="form-control" name="truong" id="" placeholder="Nhap ma truong vien" value="<?= $_SESSION['tt_sinhvien'][$msv]['truong']?>">
			</div>




			<button type="submit" name="save" class="btn btn-primary">Them moi</button>
		</form>
	</div>

</body>
</html>