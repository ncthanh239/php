<?php 
	session_start();
	if(isset($_SESSION['isLogin'])){
		header('Location: admin.php');
	}
	if(isset($_POST['email'])&&isset($_POST['password'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		if($email=='michellenguyen239@gmail.com'&&$password='123'){
			$_SESSION['isLogin']=1;
			setcookie('msg','Đăng nhập thành công!',time()+1);
			 header('Location: admin.php');
		}else{
            echo "<h3>Đăng nhập không thành công!</h3>";
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
			<legend>PHP 11 - FORM LOGIN</legend>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="Mời nhập email" name="email">
				<label for="">password</label>
				<input type="password" class="form-control" id="" placeholder="Mời nhập password" name="password">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Đăng nhập</button>
		</form>
	</div>
</body>
</html>