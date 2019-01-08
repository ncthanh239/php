<?php 
	require 'connection.php';

	$masp=$_GET['MaSP'];
	$query="DELETE FROM sanpham where MaSP='".$masp."'";
	echo $query;
	$result=$conn->query($query);
	if($result==1){
			setcookie('msg','Xóa thành công',time()+1);
		}else{
			setcookie('msg','Xóa không thành công',time()+1);
		}
		header('Location: products.php');
 ?>