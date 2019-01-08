<?php 
	$name=$_GET['name'];
	session_start();
	$_SESSION['save']="deleted";
	unset($_SESSION['sv'][$name]);
	header('Location: list.php');
 ?>