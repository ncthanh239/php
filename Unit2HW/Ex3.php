<?php 
	$array=array(2,4,6,1,7,4,8);
	echo "Mảng ban đầu là: <br>";
	echo "<pre>";
	print_r($array);
	echo "</pre>";	
	
	echo "Mảng sau khi xóa :<br>";
	unset($array[3]);
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
 ?>