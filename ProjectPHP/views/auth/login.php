<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">

		body{
			background-color: #364150;

		}
		.container{
			width: 500px;
			margin-top: 150px;
			border: 1px solid black;
			border-radius: 10px;
			background-color: #fff;
		}
		.row{
			margin: 50px;
		}


		
		
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
		<form action="?mod=login&act=postLogin" method="POST" role="form" >
		<h3 style="text-align: center; color: #56C9D7;">ĐĂNG NHẬP</h3>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" id="" placeholder="Nhập email" name="Email" value="<?php if(isset($_SESSION['old']['Email'])) echo $_SESSION['old']['Email'];  ?>">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" id="" placeholder="Nhập password" name="MatKhau">
		</div>
		<button type="submit" class="btn btn-primary">Đăng nhập</button>
	</form>
	</div>
	</div>
	
</body>
</html>