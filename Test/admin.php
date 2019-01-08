<?php 
	session_start();
	if(!(isset($_SESSION['isLogin']))){
		header('Location: login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin page</title>
</head>
<body>
	<h3>ADMIN PAGE</h3>
	<p><?php if(isset($_COOKIE['msg']))
	echo $_COOKIE['msg']?></p>
	<a href="logout.php">Log out</a>
</body>
</html>