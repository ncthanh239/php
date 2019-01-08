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
		<form action="?mod=login&act=postLogin" method="POST" role="form">
		<h3 align="center">ĐĂNG NHẬP</h3>
	
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" id="" placeholder="Nhập email" name="Email" value="<?php if(isset($_SESSION['old']['Email'])) echo $_SESSION['old']['Email'];  ?>">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" id="" placeholder="Nhập password" name="MatKhau">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
	</div>
	
</body>
</html>