<?php 
	session_start();
	// unset($_SESSION['isLogin']);
	session_destroy();
	header('Location: login.php');
 ?>